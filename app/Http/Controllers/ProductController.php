<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_product()
    {
        return view('admin.commerce.product.index');
    }
    public function show_add()
    {
        return view('admin.commerce.product.add');
    }
    public function show_product_detail()
    {
        return view('admin.commerce.product.product_detail');
    }
}
