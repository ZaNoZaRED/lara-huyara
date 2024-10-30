<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function show(int $id)
    {
        $product = Product::findOrFail($id);
        return view('card', [
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        // Валидация входящих данных
        $validatedData = $request->validate([
            'product_id' => 'required|integer|exists:products,id', // Проверяем, что продукт существует
            'amount' => 'required|integer|min:1', // Количество должно быть целым числом больше нуля
        ]);

        // Получаем продукт по его ID
        $product = Product::findOrFail($validatedData['product_id']);

        // Вычисляем общую сумму заказа
        $totalAmount = $product->cost * $validatedData['amount'];

        // Создаем новый заказ с учетом общей суммы
        $order = Order::create([
            'user_id' => Auth::id(),
            'product_id' => $validatedData['product_id'],
            'amount' => $validatedData['amount'],
            'total_amount' => $totalAmount,
        ]);

        return redirect()->route('product.show', ['id' => $request->product_id]);
    }

    public function usersOrders()
    {
        $orders = Order::where('user_id', Auth::id())->get(); // Получаем заказы текущего пользователя

        return view("orders", compact('orders'));
    }
}
