<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\UpdatePasswordRequest;
use App\Repositories\Auth\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Throwable;

/**
 * Class PasswordExpiredController.
 */
class PasswordExpiredController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function expired()
    {
        abort_unless(config('boilerplate.access.user.password_expires_days'), 404);

        return view('frontend.auth.passwords.expired');
    }

    /**
     * @param UpdatePasswordRequest $request
     * @param UserRepository $userRepository
     *
     * @return mixed
     * @throws Throwable
     */
    public function update(UpdatePasswordRequest $request, UserRepository $userRepository)
    {
        abort_unless(config('boilerplate.access.user.password_expires_days'), 404);

        $userRepository->updatePassword($request->user(), $request->only('old_password', 'password'), true);

        return redirect()->route('admin.user.account')
            ->withFlashSuccess(__('Contraseña actualizada correctamente.'));
    }
}
