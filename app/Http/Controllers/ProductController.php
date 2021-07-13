<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        print_r(route('products'));

        return view('products.index');
    }
}
