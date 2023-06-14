<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show_order()
    {
        return view('admin.commerce.order.index');
    }
    public function show_order_detail()
    {
        return view('admin.commerce.order.order_detail');
    }
}
