<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\UserRequest;
use App\Models\Auth\User;

/**
 * Class UserSessionController.
 */
class UserSessionController extends Controller
{
    /**
     * @param UserRequest $request
     * @param User $user
     *
     * @return mixed
     */
    public function update(UserRequest $request, User $user)
    {
        if ($user->id === auth()->id()) {
            return redirect()->back()->withFlashDanger(__('No puedes limpiar tu propia sesión.'));
        }

        $user->update(['to_be_logged_out' => true]);

        return redirect()->back()->withFlashSuccess(__("La sesión de $user->name se limpio correctamente."));
    }
}
