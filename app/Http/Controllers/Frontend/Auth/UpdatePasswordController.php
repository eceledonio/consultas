<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\UpdatePasswordRequest;
use App\Repositories\Auth\UserRepository;
use Throwable;

/**
 * Class UpdatePasswordController.
 */
class UpdatePasswordController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * ChangePasswordController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param  UpdatePasswordRequest  $request
     *
     * @return mixed
     * @throws Throwable
     */
    public function update(UpdatePasswordRequest $request)
    {
        $this->userRepository->updatePassword($request->user(), $request->validated());

        return redirect()->route('admin.user.account', ['#password'])->withFlashSuccess(__('Contraseña actualizada correctamente.'));
    }
}
