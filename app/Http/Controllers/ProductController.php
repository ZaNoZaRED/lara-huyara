<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(): View
    {
        return view('product', [
            'products' => Product::all()
        ]);
    }
    public function show1(): View
    {
        return view('productu', [
            'products' => Product::all()
        ]);
    }
    
    
}
