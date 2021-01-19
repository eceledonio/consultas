<?php

// All route names are prefixed with 'admin.'.
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
use Tabuna\Breadcrumbs\Trail;

Route::redirect('/', '/admin/dashboard', 301)->name('redirect');

// Colors Utilities
Route::get('colores', function () {
    return view('backend.colores');
})->name('colores');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('permission:dashboard.read', 'verified:frontend.auth.verification.notice')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Tablero'), route('admin.dashboard'));
    });

Route::prefix('test')->group(function ($router) {
    $router->get('test', [HomeController::class])->name('test')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Prueba'), route('admin.test'));
        });
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');

    return redirect()->route('admin.dashboard')->withFlashSuccess(__('Limpieza de Cache Completada.'));
});
