<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('hono.index');
    }
    public function show_my_account()
    {
        return view('hono.account.index');
    }
}
