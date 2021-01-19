<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Class TwoFactorAuthenticationStatus.
 */
class TwoFactorAuthenticationStatus
{
    /**
     * @param $request
     * @param  Closure  $next
     * @param  string  $status
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $status = 'enabled')
    {
        if (! in_array($status, ['enabled', 'disabled'])) {
            abort(404);
        }

        // If the user is the super admin with id 1 than continue
        if ($status === 'enabled' && $request->is('admin*') && config('boilerplate.access.user.admin_requires_2fa') && Auth::user()->id == 1) {
            return $next($request);
        }

        // If the backend does not require 2FA than continue
        if ($status === 'enabled' && $request->is('admin*') && ! config('boilerplate.access.user.admin_requires_2fa')) {
            return $next($request);
        }

        // Page requires 2fa, but user is not enabled or page does not require 2fa, but it is enabled
        if (
            ($status === 'enabled' && ! $request->user()->hasTwoFactorEnabled()) ||
            ($status === 'disabled' && $request->user()->hasTwoFactorEnabled())
        ) {
            return redirect()->route('frontend.auth.account.2fa.create')->withFlashDanger(__('La autenticación de dos factores debe ser habilitada para ver esta página.', ['status' => $status]));
        }

        return $next($request);
    }
}
