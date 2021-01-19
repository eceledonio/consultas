<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\UpdateProfileRequest;
use App\Repositories\Auth\UserRepository;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

/**
 * Class ProfileController.
 */
class UserProfileController extends Controller
{
    /**
     * @param  UpdateProfileRequest  $request
     * @param  UserRepository  $userRepository
     *
     * @return mixed
     */
    public function update(UpdateProfileRequest $request, UserRepository $userRepository)
    {
        $userRepository->updateProfile(
            $request->user(),
            $request->validated()
        );

        if ($request->has('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        if (session()->has('resent')) {
            return redirect()->route('frontend.auth.verification.notice')->withFlashInfo(__('Debe confirmar su nueva dirección de correo electrónico antes de poder continuar.'));
        }

        return redirect()->route('admin.user.account', ['#information'])->withFlashSuccess(__('Perfil actualizado correctamente.'));
    }
}
