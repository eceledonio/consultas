<?php

// All route names are prefixed with 'admin.'.
use App\Http\Controllers\Backend\Consulta\ConsultaController;
use Tabuna\Breadcrumbs\Trail;


Route::get('consulta',[ConsultaController::class, 'index'])
    ->name('consulta.index');