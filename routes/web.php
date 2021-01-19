<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\RoutesController;

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

// Show pretty routes
Route::get(config('boilerplate.routes.url'), [RoutesController::class, 'show'])
    ->name('routes.show')
    ->middleware(config('boilerplate.routes.middlewares'));

/*
 * Frontend Routes
 */
Route::name('frontend.')->group(function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    includeRouteFiles(__DIR__.'/backend/');
});
