<?php

namespace Database\Seeders;

use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create(["name" => "Orange", "cost" => 570, "amount" => 56]);
        Product::create(["name" => "Banana", "cost" => 5880, "amount" => 0]);
        Product::create(["name" => "Apple", "cost" => 650, "amount" => 100]);
    }
}
