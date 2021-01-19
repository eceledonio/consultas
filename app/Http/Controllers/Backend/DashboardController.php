<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $page_title = 'Tablero de mando';

        return view('backend.dashboard', compact('page_title'));
    }
}
