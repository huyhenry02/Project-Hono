<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show_customer()
    {
        return view('admin.commerce.customer.index');
    }
    public function show_add()
    {
        return view('admin.commerce.customer.add');
    }
    public function show_customer_detail()
    {
        return view('admin.commerce.customer.customer_detail');
    }
}
