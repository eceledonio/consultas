<?php

namespace App\Repositories\Auth;

use App\Events\User\UserCreated;
use App\Events\User\UserDeleted;
use App\Events\User\UserDestroyed;
use App\Events\User\UserRestored;
use App\Events\User\UserStatusChanged;
use App\Events\User\UserUpdated;
use App\Exceptions\GeneralException;
use App\Models\Auth\User;
use App\Repositories\BaseRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * UserRepository constructor.
     *
     * @param  User  $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * @param int  $status
     * @param bool $trashed
     *
     * @return mixed
     */
    public function getForDataTable($status = 1, $trashed = false)
    {
        $dataTableQuery = User::with('roles', 'permissions', 'twoFactorAuth')
            ->select([
                'users.*',
            ])->where('id', '!=', '1');

        if ($trashed === 'true') {
            return $dataTableQuery->onlyTrashed();
        }

        // onlyActive() is a scope on the UserScope trait
        return $dataTableQuery->active($status);
    }

    /**
     * @param array $data
     *
     * @return mixed
     * @throws GeneralException
     * @throws Throwable
     */
    public function registerUser(array $data = []): User
    {
        DB::beginTransaction();

        try {
            $user = $this->createUser($data);
            $user->assignRole(config('boilerplate.access.role.default'));
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('Hubo un problema creando tu cuenta.'));
        }

        DB::commit();

        return $user;
    }

    /**
     * @param $info
     * @param $provider
     *
     * @return mixed
     * @throws GeneralException
     * @throws Throwable
     */
    public function registerProvider($info, $provider): User
    {
        $user = $this->model::where('provider_id', $info->id)->first();

        /// If not found, Check if a matching email account exists.
        if (! $user) {
            $user = $this->model::whereNull('provider_id')->whereEmail($info->email)->first();
            // If now found via email, update user provider id
            if ($user) {
                DB::beginTransaction();

                try {
                    $user->provider = $provider;
                    $user->save();
                } catch (Exception $e) {
                    DB::rollBack();

                    throw new GeneralException(__('Hubo un problema al conectar con el proveedor :provider', ['provider' => $provider]));
                }
                DB::commit();
            }
        }

        if (! $user) {
            /// If user not found via provider id or email, Check config allows registration
            if (config('boilerplate.access.user.registration')) {
                DB::beginTransaction();

                try {
                    $user = $this->createUser([
                        'name' => $info->name,
                        'email' => $info->email,
                        'provider' => $provider,
                        'provider_id' => $info->id,
                        'email_verified_at' => now(),
                    ]);
                } catch (Exception $e) {
                    DB::rollBack();

                    throw new GeneralException(__('Hubo un problema conectando al proveedor :provider', ['provider' => $provider]));
                }

                DB::commit();
            } else {
                throw new GeneralException(__('Los registros se encuentran actualmente cerrados.'));
            }
        }

        return $user;
    }

    /**
     * @param  array  $data
     *
     * @return User
     * @throws GeneralException
     * @throws Throwable
     */
    public function store(array $data = []): User
    {
        DB::beginTransaction();

        try {
            $user = $this->model::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'provider' => $data['provider'] ?? null,
                'provider_id' => $data['provider_id'] ?? null,
                'email_verified_at' => isset($data['email_verified']) && $data['email_verified'] === '1' ? now()->tz(settings('timezone')) : null,
                'active' => isset($data['active']) && $data['active'] === '1',
            ]);

            $user->syncRoles($data['roles'] ?? []);

            if (! config('boilerplate.access.user.only_roles')) {
                $user->syncPermissions($data['permissions'] ?? []);
            }
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('Hubo un problema al crear el usuario. Inténtelo de nuevo.'));
        }

        event(new UserCreated($user));

        DB::commit();

        // They didn't want to auto verify the email, but do they want to send the confirmation email to do so?
        if (! isset($data['email_verified']) && isset($data['send_confirmation_email']) && $data['send_confirmation_email'] === '1') {
            $user->sendEmailVerificationNotification();
        }

        return $user;
    }

    /**
     * @param  User  $user
     * @param  array  $data
     *
     * @return User
     * @throws Throwable
     */
    public function update(User $user, array $data = []): User
    {
        $this->checkUserByEmail($user, $data['email']);

        DB::beginTransaction();

        try {
            $user->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
            ]);

            if (! $user->isSuperAdmin()) {
                // Replace selected roles/permissions
                $user->syncRoles($data['roles'] ?? []);

                if (! config('boilerplate.access.user.only_roles')) {
                    $user->syncPermissions($data['permissions'] ?? []);
                }
            }
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('Hubo un problema al modificar el usuario. Inténtelo de nuevo.'));
        }

        event(new UserUpdated($user));

        DB::commit();

        return $user;
    }

    /**
     * @param  User  $user
     * @param  array  $data
     *
     * @return User
     */
    public function updateProfile(User $user, array $data = []): User
    {
        $user->first_name = $data['first_name'] ?? null;
        $user->last_name = $data['last_name'] ?? null;

        if ($user->canChangeEmail() && $user->email !== $data['email']) {
            $user->email = $data['email'];
            $user->email_verified_at = null;
            $user->sendEmailVerificationNotification();
            session()->flash('resent', true);
        }

        return tap($user)->save();
    }

    /**
     * @param  User  $user
     * @param $data
     * @param  bool  $expired
     *
     * @return User
     * @throws Throwable
     */
    public function updatePassword(User $user, $data, $expired = false): User
    {
        if (isset($data['current_password'])) {
            throw_if(
                ! Hash::check($data['current_password'], $user->password),
                new GeneralException(__('Esa no es tu antigua contraseña.'))
            );
        }

        // Reset the expiration clock
        if ($expired) {
            $user->password_changed_at = now();
        }

        $user->password = $data['password'];

        return tap($user)->update();
    }

    /**
     * @param  User  $user
     * @param $status
     *
     * @return User
     * @throws GeneralException
     */
    public function mark(User $user, $status): User
    {
        if ($status === 0 && auth()->id() === $user->id) {
            throw new GeneralException(__('No puedes hacerte eso a tí mismo.'));
        }

        if ($status === 0 && $user->isSuperAdmin()) {
            throw new GeneralException(__('No puedes desactivar la cuenta del super administrador.'));
        }

        $user->active = $status;

        if ($user->save()) {
            event(new UserStatusChanged($user, $status));

            return $user;
        }

        throw new GeneralException(__('Hubo un problema actualizando este usuario. Intente de nuevo.'));
    }

    /**
     * @param  User $user
     *
     * @return User
     * @throws Exception
     * @throws GeneralException
     */
    public function delete(User $user): User
    {
        if ($user->id === auth()->id()) {
            throw new GeneralException(__('No puedes eliminarte a tí mismo.'));
        }

        if ($this->deleteById($user->id)) {
            event(new UserDeleted($user));

            return $user;
        }

        throw new GeneralException('Hubo un problema al eliminar este usuario. Inténtelo de nuevo.');
    }

    /**
     * @param User $user
     *
     * @throws GeneralException
     * @return User
     */
    public function restore(User $user): User
    {
        if ($user->restore()) {
            event(new UserRestored($user));

            return $user;
        }

        throw new GeneralException(__('Hubo un problema restaurando este usuario. Inténtelo de nuevo.'));
    }

    /**
     * @param  User  $user
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(User $user): bool
    {
        if ($user->forceDelete()) {
            event(new UserDestroyed($user));

            return true;
        }

        throw new GeneralException(__('Hubo un problema al intentar eliminar permanentemente este usuario. Inténtelo de nuevo.'));
    }

    /**
     * @param  array  $data
     *
     * @return User
     */
    protected function createUser(array $data = []): User
    {
        return $this->model::create([
            'first_name' => $data['first_name'] ?? null,
            'last_name' => $data['last_name'] ?? null,
            'email' => $data['email'] ?? null,
            'password' => $data['password'] ?? null,
            'provider' => $data['provider'] ?? null,
            'provider_id' => $data['provider_id'] ?? null,
            'email_verified_at' => $data['email_verified_at'] ?? null,
            'active' => $data['active'] ?? true,
        ]);
    }

    /**
     * @param User $user
     * @param      $email
     *
     * @throws GeneralException
     */
    protected function checkUserByEmail(User $user, $email)
    {
        // Figure out if email is not the same and check to see if email exists
        if ($user->email !== $email && User::where('email', '=', $email)->first()) {
            throw new GeneralException(__('Ya existe un usuario con la dirección de correo especificada.'));
        }
    }
}
