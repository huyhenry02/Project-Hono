<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommerceController extends Controller
{
    public function show_overview ()
    {
        return view('admin.commerce.index');
    }
}
