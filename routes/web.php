<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', [ProductController::class, 'show']);
Route::post('/orders', [OrderController::class, 'store'])->name('product.store'); //Метод store отвечает за получение данных из запроса, их валидацию и сохранение в базе данных.
Route::get('card/{id}', [OrderController::class, 'show'])->name('product.show');


