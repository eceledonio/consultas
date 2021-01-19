<?php

namespace App\Repositories\Auth;

use App\Events\Role\RoleCreated;
use App\Events\Role\RoleDeleted;
use App\Events\Role\RoleUpdated;
use App\Exceptions\GeneralException;
use App\Models\Auth\Role;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Class RoleRepository.
 */
class RoleRepository extends BaseRepository
{
    /**
     * RoleRepository constructor.
     *
     * @param  Role $role
     */
    public function __construct(Role $role)
    {
        $this->model = $role;
    }


    /**
     * @param array $data
     * @return Role
     * @throws GeneralException
     * @throws Throwable
     */
    public function store(array $data = []): Role
    {
        // Make sure it doesn't already exist
        if ($this->roleExists($data['name'])) {
            throw new GeneralException('Ya existe un perfil con el nombre '.e($data['name']));
        }

        DB::beginTransaction();

        try {
            $role = $this->model::create([
                'name' => strtolower($data['name']),
                'description' => strtolower($data['description']),
            ]);

            $role->syncPermissions($data['permissions'] ?? []);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('Hubo un problema al crear el Perfil. Inténtelo de nuevo.'));
        }

        event(new RoleCreated($role));

        DB::commit();

        return $role;
    }

    /**
     * @param Role  $role
     * @param array $data
     *
     * @throws GeneralException
     * @throws Throwable
     * @return mixed
     */
    public function update(Role $role, array $data = []): Role
    {
        if ($role->isSuperAdmin()) {
            throw new GeneralException(__('No puedes modificar el perfil de super administrador.'));
        }

        // If the name is changing make sure it doesn't already exist
        if ($role->name !== strtolower($data['name'])) {
            if ($this->roleExists($data['name'])) {
                throw new GeneralException('Ya existe un perfil con el nombre '.$data['name']);
            }
        }

        DB::beginTransaction();

        try {
            $role->update([
                'name' => strtolower($data['name']),
                'description' => strtolower($data['description']),
            ]);

            $role->syncPermissions($data['permissions'] ?? []);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('Hubo un problema al modificar el Perfil. Inténtelo de nuevo.'));
        }

        event(new RoleUpdated($role));

        DB::commit();

        return $role;
    }

    /**
     * @param  Role  $role
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Role $role): bool
    {
        if ($role->users()->count()) {
            throw new GeneralException(__('No puede eliminar un perfil con usuarios asociados.'));
        }

        if ($this->deleteById($role->id)) {
            event(new RoleDeleted($role));

            return true;
        }

        throw new GeneralException(__('Hubo un problema al eliminar el perfil.'));
    }

    /**
     * @param $name
     *
     * @return bool
     */
    protected function roleExists($name): bool
    {
        return $this->model
                ->where('name', strtolower($name))
                ->count() > 0;
    }
}
