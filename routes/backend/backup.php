<?php

use App\Http\Controllers\Backend\Backup\BackupController;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Namespaces indicate folder structure
Route::group([
    'prefix' => 'backup',
    'as' => 'backup.',
    'namespace' => 'Backup',
    'middleware' => ['role:'.config('boilerplate.access.role.super_admin')],
], function () {
    // Backup routes
    Route::get('/', [BackupController::class, 'index'])
        ->name('index')
        ->middleware('permission:logs.read')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Administración de Copias de Seguridad'), route('admin.backup.index'));
        });

    Route::put('create', [BackupController::class, 'create'])->name('create');
    Route::get('download/{file_name?}', [BackupController::class, 'download'])->name('download');
    Route::delete('delete/{file_name?}', [BackupController::class, 'delete'])->where('file_name', '(.*)')->name('delete');
});
