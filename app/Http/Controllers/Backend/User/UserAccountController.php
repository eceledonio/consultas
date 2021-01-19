<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;

/**
 * Class AccountController.
 */
class UserAccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $page_title = 'Mi Perfil';
        $page_description = 'Cuenta, Ajustes y más!';

        return view('backend.user.account', compact('page_title', 'page_description'));
    }
}
