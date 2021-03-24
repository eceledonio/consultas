<?php

// All route names are prefixed with 'admin.'.
use App\Http\Controllers\Backend\Consulta\ConsultaController;

Route::get('consulta', [ConsultaController::class, 'index'])
    ->name('consulta.index');

Route::get('consulta/{paciente}/create', [ConsultaController::class, 'create'])
    ->name('consulta.create');
