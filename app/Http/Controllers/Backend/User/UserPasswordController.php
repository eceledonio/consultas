<?php

namespace App\Http\Controllers\Backend\User;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\UserRequest;
use App\Models\Auth\User;
use App\Repositories\Auth\UserRepository;
use Illuminate\Support\Facades\Auth;
use Throwable;

/**
 * Class UserPasswordController.
 */
class UserPasswordController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UserPasswordController constructor.
     *
     * @param  UserRepository  $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UserRequest $request
     * @param User $user
     *
     * @return mixed
     * @throws GeneralException
     */
    public function edit(UserRequest $request, User $user)
    {
        $page_title = __('Cambiar contraseña para :name', ['name' => $user->name]);

        if ($user->id == 1 && Auth::user()->id != 1 || $user->id == 2 && Auth::user()->id != 2) {
            throw new GeneralException(__('Solo el administrador puede cambiar su contraseña.'));
        }

        return view('backend.auth.user.change-password')
            ->withUser($user)
            ->with('page_title', $page_title);
    }

    /**
     * @param  UserRequest  $request
     * @param  User  $user
     *
     * @return mixed
     * @throws Throwable
     */
    public function update(UserRequest $request, User $user)
    {
        $this->userRepository->updatePassword($user, $request->validated());

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__("La contraseña del usuario $user->name fue actualizada correctamente."));
    }
}
