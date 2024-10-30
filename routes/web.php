<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [ProductController::class, 'show'])->name('main');
Route::get('/card/{id}', [OrderController::class, 'show'])->name('product.show');

Route::post('/orders', [OrderController::class, 'store'])->name('product.store')->middleware('auth'); //Метод store отвечает за получение данных из запроса, их валидацию и сохранение в базе данных.

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/orders', [OrderController::class, 'usersOrders'])->name('cart');
