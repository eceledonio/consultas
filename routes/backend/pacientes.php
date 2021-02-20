<?php

// All route names are prefixed with 'admin.'.
use App\Http\Controllers\Backend\Paciente\PacienteController;

use Tabuna\Breadcrumbs\Trail;

Route::redirect('/', '/admin/dashboard', 301)->name('redirect');

Route::get('paciente', [PacienteController::class, 'index'])
    ->name('paciente.index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Listado de pacientes'), route('admin.dashboard'));
    });
Route::get('paciente/create', [PacienteController::class, 'create'])
    ->name('paciente.create')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Nuevo paciente'), route('admin.paciente.index'));
    });
Route::get('paciente/get', [PacienteController::class, 'getDataTables'])
    ->name('paciente.get');
Route::post('paciente', [PacienteController::class, 'store'])->name('paciente.store');
Route::get('paciente/{paciente}/show', [PacienteController::class, 'show'])->name('paciente.show');
Route::get('paciente/{paciente}/edit', [PacienteController::class, 'edit'])->name('paciente.edit');
Route::patch('paciente/{paciente}', [PacienteController::class, 'update'])->name('paciente.update');
Route::delete('paciente/{paciente}', [PacienteController::class, 'delete'])->name('paciente.delete');
