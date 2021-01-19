<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\DisableTwoFactorAuthenticationRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/*
 * Class DisableTwoFactorAuthenticationController.
 */
class DisableTwoFactorAuthenticationController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function show()
    {
        return view('backend.user.account.tabs.two-factor-authentication.disable');
    }

    /**
     * @param  DisableTwoFactorAuthenticationRequest  $request
     *
     * @return mixed
     */
    public function destroy(DisableTwoFactorAuthenticationRequest $request)
    {
        $request->user()->disableTwoFactorAuth();

        return redirect()->route('admin.user.account', ['#two-factor-authentication'])->withFlashSuccess(__('Se ha deshabilitado la autenticación de dos factores correctamente.'));
    }
}
