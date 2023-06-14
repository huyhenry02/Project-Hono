<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthAdminController extends Controller
{
    public function show_reset_pass()
    {
        return view('admin.login.reset_pass');
    }

    public function show_login()
    {
        return view('admin.login.index');
    }

    public function show_register()
    {
        return view('admin.login.register');
    }
}
