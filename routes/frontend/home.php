<?php

use App\Http\Controllers\Frontend\TermsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [PagesController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Inicio'), route('frontend.index'));
    });

Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terminos & Condiciones'), route('frontend.pages.terms'));
    });

// Demo routes
Route::get('datatables', [PagesController::class, 'datatables'])->name('datatables');
Route::get('ktdatatables', [PagesController::class, 'ktDatatables'])->name('ktDatatables');
Route::get('select2', [PagesController::class, 'select2'])->name('select2');
Route::get('custom-icons', [PagesController::class, 'customIcons'])->name('customIcons');
Route::get('flaticon', [PagesController::class, 'flaticon'])->name('flaticon');
Route::get('fontawesome', [PagesController::class, 'fontawesome'])->name('fontawesome');
Route::get('lineawesome', [PagesController::class, 'lineawesome'])->name('lineawesome');
Route::get('socicons', [PagesController::class, 'socicons'])->name('socicons');
Route::get('svg', [PagesController::class, 'svg'])->name('svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', [PagesController::class, 'quickSearch'])->name('quick-search');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
