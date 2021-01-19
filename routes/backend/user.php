<?php

use App\Http\Controllers\Backend\User\UserAccountController;
use App\Http\Controllers\Backend\User\UserProfileController;
use Tabuna\Breadcrumbs\Trail;

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the user has not confirmed their email
 */
Route::group(['as' => 'user.', 'middleware' => ['password.expires', config('boilerplate.access.middleware.verified')]], function () {
    Route::get('account', [UserAccountController::class, 'index'])
        ->name('account')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Mi Perfil'), route('admin.user.account'));
        });

    Route::patch('profile/update', [UserProfileController::class, 'update'])->name('profile.update');
});
