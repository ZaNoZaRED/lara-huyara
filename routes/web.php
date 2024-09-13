<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        ["name" => "Orange", "cost"=> 50000000, "amount"=> 27],
        ["name" => "Banana", "cost"=> 50000000, "amount"=> 27],
        ["name" => "Bread", "cost"=> 50000000, "amount"=> 0],
    ];
    return view('welcome', ['products' => $products]);
});
