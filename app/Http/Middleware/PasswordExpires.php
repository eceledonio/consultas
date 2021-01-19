<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;

/**
 * Class PasswordExpires.
 */
class PasswordExpires
{
    /**
     * @param $request
     * @param  Closure  $next
     *
     * @return \Illuminate\Http\RedirectResponse|mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        if (is_numeric(config('boilerplate.access.user.password_expires_days'))) {
            $password_changed_at = new Carbon($request->user()->password_changed_at ?? $request->user()->created_at);

            if (now()->diffInDays($password_changed_at) >= config('boilerplate.access.user.password_expires_days')) {
                return redirect()
                    ->route('frontend.auth.password.expired')
                    ->withFlashWarning(__('Tu contraseña ha expirado. Le pedimos que cambie su contraseña cada :days días por motivos de seguridad.', [
                        'days' => config('boilerplate.access.user.password_expires_days'),
                    ]));
            }
        }

        return $next($request);
    }
}