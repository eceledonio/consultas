<?php

use App\Http\Controllers\Backend\Role\RoleController;
use App\Http\Controllers\Backend\User\DeactivatedUserController;
use App\Http\Controllers\Backend\User\DeletedUserController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\UserLogController;
use App\Http\Controllers\Backend\User\UserPasswordController;
use App\Http\Controllers\Backend\User\UserSessionController;
use App\Models\Auth\Role;
use App\Models\Auth\User;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.auth'.
Route::group([
    'prefix' => 'auth',
    'as' => 'auth.',
    'middleware' => config('boilerplate.access.middleware.confirm'),
], function () {
    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
    ], function () {
        Route::group([
            'middleware' => 'permission:users.read'.'|'.'role:'.config('boilerplate.access.role.admin'),
        ], function () {
            // For DataTables
            Route::get('get', [UserController::class, 'getDataTables'])->name('get');

            Route::get('deleted', [DeletedUserController::class, 'index'])
                ->name('deleted')
                ->middleware('permission:users.deleted')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.auth.user.index')
                        ->push(__('Usuarios Eliminados'), route('admin.auth.user.deleted'));
                });

            Route::get('create', [UserController::class, 'create'])
                ->name('create')
                ->middleware('permission:users.create')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.auth.user.index')
                        ->push(__('Nuevo Usuario'), route('admin.auth.user.create'));
                });

            Route::post('/', [UserController::class, 'store'])
                ->name('store')
                ->middleware('permission:users.create');

            Route::group(['prefix' => '{user}'], function () {
                Route::get('edit', [UserController::class, 'edit'])
                    ->name('edit')
                    ->middleware('permission:users.update')
                    ->breadcrumbs(function (Trail $trail, User $user) {
                        $trail->parent('admin.auth.user.show', $user)
                            ->push(__('Modificar'), route('admin.auth.user.edit', $user));
                    });

                Route::patch('/', [UserController::class, 'update'])
                    ->name('update')
                    ->middleware('permission:users.update');

                Route::delete('/', [UserController::class, 'destroy'])
                    ->name('destroy')
                    ->middleware('permission:users.delete');
            });

            Route::group(['prefix' => '{deletedUser}'], function () {
                Route::patch('restore', [DeletedUserController::class, 'update'])
                    ->name('restore')
                    ->middleware('permission:users.restore');

                Route::delete('permanently-delete', [DeletedUserController::class, 'destroy'])
                    ->name('permanently-delete')
                    ->middleware('permission:users.permanently-delete');
            });
        });

        Route::get('deactivated', [DeactivatedUserController::class, 'index'])
            ->name('deactivated')
            ->middleware('permission:users.deactivate')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.auth.user.index')
                    ->push(__('Usuarios Desactivados'), route('admin.auth.user.deactivated'));
            });

        Route::get('/', [UserController::class, 'index'])
            ->name('index')
            ->middleware('permission:users.read')
            ->breadcrumbs(function (Trail $trail) {
                $trail->push(__('Administración de Usuarios'), route('admin.auth.user.index'));
            });

        Route::group(['prefix' => '{user}'], function () {
            Route::get('/', [UserController::class, 'show'])
                ->name('show')
                ->middleware('permission:users.show')
                ->breadcrumbs(function (Trail $trail, User $user) {
                    $trail->parent('admin.auth.user.index')
                        ->push($user->name, route('admin.auth.user.show', $user));
                });

            Route::patch('mark/{status}', [DeactivatedUserController::class, 'update'])
                ->name('mark')
                ->where(['status' => '[0,1]'])
                ->middleware('permission:users.deactivate');

            Route::post('clear-session', [UserSessionController::class, 'update'])
                ->name('clear-session')
                ->middleware('permission:users.clear-session');

            Route::get('password/change', [UserPasswordController::class, 'edit'])
                ->name('change-password')
                ->middleware('permission:users.update')
                ->breadcrumbs(function (Trail $trail, User $user) {
                    $trail->parent('admin.auth.user.show', $user)
                        ->push(__('Cambiar Contraseña'), route('admin.auth.user.change-password', $user));
                });

            Route::patch('password/change', [UserPasswordController::class, 'update'])
                ->name('change-password.update')
                ->middleware('permission:users.update');
        });
    });

    Route::group([
        'prefix' => 'role',
        'as' => 'role.',
        'middleware' => 'permission:roles.read'.'|'.'role:'.config('boilerplate.access.role.admin'),
    ], function () {
        Route::get('/', [RoleController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Administración de Perfiles'), route('admin.auth.role.index'));
            });

        Route::get('create', [RoleController::class, 'create'])
            ->name('create')
            ->middleware('permission:roles.create')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.auth.role.index')
                    ->push(__('Nuevo Perfil'), route('admin.auth.role.create'));
            });

        Route::post('/', [RoleController::class, 'store'])
            ->name('store')
            ->middleware('permission:roles.create');

        Route::group(['prefix' => '{role}'], function () {
            Route::get('show', [RoleController::class, 'show'])
                ->name('show')
                ->middleware('permission:roles.show')
                ->breadcrumbs(function (Trail $trail, Role $role) {
                    $trail->parent('admin.auth.role.index')
                        ->push($role->name, route('admin.auth.role.show', $role));
                });

            Route::get('edit', [RoleController::class, 'edit'])
                ->name('edit')
                ->middleware('permission:roles.update')
                ->breadcrumbs(function (Trail $trail, Role $role) {
                    $trail->parent('admin.auth.role.index')
                        ->push(__('Modificando :role', ['role' => $role->name]), route('admin.auth.role.edit', $role));
                });

            Route::patch('/', [RoleController::class, 'update'])
                ->name('update')
                ->middleware('permission:roles.update');

            Route::delete('/', [RoleController::class, 'destroy'])
                ->name('destroy')
                ->middleware('permission:roles.delete');
        });
    });

    // User Logs Routes
    Route::group([
        'prefix' => 'logs',
        'as' => 'logs.',
    ], function () {
        // Security Logs
        Route::group(['namespace' => 'User'], function () {
            Route::get('/', [UserLogController::class, 'index'])
                 ->name('index')
                 ->middleware('permission:logs.read')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.dashboard')
                          ->push(__('Administración de Eventos'), route('admin.auth.logs.index'));
                });

            Route::get('show/{id}', [UserLogController::class, 'show'])
                 ->name('show')
                 ->middleware('permission:logs.show')
                 ->breadcrumbs(function (Trail $trail, $id) {
                     $trail->parent('admin.auth.logs.index')
                           ->push(__('Visualizando Evento :log', ['log' => $id]), route('admin.auth.logs.show', $id));
                 });

            Route::patch('restore/{id}', [UserLogController::class, 'restore'])
                 ->name('restore')
                 ->middleware('permission:logs.restore')
                 ->breadcrumbs(function (Trail $trail) {
                     $trail->parent('admin.auth.logs.index')
                           ->push(__('Restaurar Evento'), route('admin.auth.logs.restore'));
                 });
        });
    });
});
