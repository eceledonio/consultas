<?php

//Rutas para el modulo de consulta.

use App\Http\Controllers\Backend\Consulta\ConsultaController;
use Tabuna\Breadcrumbs\Trail;

Route::get('consulta', [ConsultaController::class, 'index'])
    ->name('consulta.index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Consulta'), route('admin.consulta.index'));
    });

Route::get('consulta/{paciente}/create', [ConsultaController::class, 'create'])
    ->name('consulta.create');
//    ->breadcrumbs(function (Trail $trail) {
//        $trail->parent('admin.consulta.index')
//            ->push(__('Historia'), route('admin.consulta.create'));
//    });

Route::get('consulta/cie10', [ConsultaController::class, 'searchCIE10'])
    ->name('get.cie10');
