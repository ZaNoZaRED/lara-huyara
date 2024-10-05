<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller {
public function store(Request $request)
{
    
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1'

    ]);

    // Логика для создания заказа
    Order::create([
        'product_id' => $request->product_id,
        'quantity' => $request->quantity,
        'sum'=>  $request->quantity * Product::findOrFail($request->product_id)->cost,
    ]);
    $pro = Order::all();
    return view('Order', ['pro' => $pro]);
}
}