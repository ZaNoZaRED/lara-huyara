<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(): View
    {
        return view('welcome', [
            'products' => Product::orderBy('name')->get()
        ]);
    }
}

