<?php

use App\Http\Controllers\Frontend\Auth\ConfirmPasswordController;
use App\Http\Controllers\Frontend\Auth\DisableTwoFactorAuthenticationController;
use App\Http\Controllers\Frontend\Auth\ForgotPasswordController;
use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\PasswordExpiredController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\Auth\ResetPasswordController;
use App\Http\Controllers\Frontend\Auth\SocialController;
use App\Http\Controllers\Frontend\Auth\TwoFactorAuthenticationController;
use App\Http\Controllers\Frontend\Auth\UpdatePasswordController;
use App\Http\Controllers\Frontend\Auth\VerificationController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.auth'.
 */
Route::group(['as' => 'auth.'], function () {
    Route::group(['middleware' => 'auth'], function () {
        // Authentication
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');

        // Password expired routes
        Route::get('password/expired', [PasswordExpiredController::class, 'expired'])->name('password.expired');
        Route::patch('password/expired', [PasswordExpiredController::class, 'update'])->name('password.expired.update');

        // These routes can not be hit if the password is expired
        Route::group(['middleware' => 'password.expires'], function () {
            // E-mail Verification
            Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
            Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
            Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

            // These routes require the users email to be verified
            Route::group(['middleware' => config('boilerplate.access.middleware.verified')], function () {
                // Passwords
                Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
                Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm'])->name('password.confirm.post');

                Route::patch('password/update', [UpdatePasswordController::class, 'update'])->name('password.change');

                // Two-factor Authentication
                Route::group(['prefix' => 'account/2fa', 'as' => 'account.2fa.'], function () {
                    Route::group(['middleware' => '2fa:disabled'], function () {
                        Route::get('enable', [TwoFactorAuthenticationController::class, 'create'])
                            ->name('create')
                            ->breadcrumbs(function (Trail $trail) {
                                $trail->parent('admin.user.account')
                                    ->push(__('Habilitar autenticación de dos factores'), route('frontend.auth.account.2fa.create'));
                            });
                    });

                    Route::group(['middleware' => '2fa:enabled'], function () {
                        Route::get('recovery', [TwoFactorAuthenticationController::class, 'show'])
                            ->name('show')
                            ->breadcrumbs(function (Trail $trail) {
                                $trail->parent('admin.user.account')
                                    ->push(__('Códigos de recuperación de dos factores'), route('frontend.auth.account.2fa.show'));
                            });

                        Route::patch('recovery/generate', [TwoFactorAuthenticationController::class, 'update'])->name('update');

                        Route::get('disable', [DisableTwoFactorAuthenticationController::class, 'show'])
                            ->name('disable')
                            ->breadcrumbs(function (Trail $trail) {
                                $trail->parent('admin.user.account')
                                    ->push(__('Deshabilitar autenticación de dos factores'), route('frontend.auth.account.2fa.disable'));
                            });

                        Route::delete('/', [DisableTwoFactorAuthenticationController::class, 'destroy'])->name('destroy');
                    });
                });
            });
        });
    });

    Route::group(['middleware' => 'guest'], function () {
        // Authentication
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login'])->name('login.post');

        // Registration
        Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('register', [RegisterController::class, 'register'])->name('register.post');

        // Password Reset
        Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
        Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

        // Socialite Routes
        Route::get('login/{provider}', [SocialController::class, 'redirect'])->name('social.login');
        Route::get('login/{provider}/callback', [SocialController::class, 'callback'])->name('callback');
    });
});
