<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'orange', 'cost' => 540, 'amount' => 4],
            ['name' => 'apple', 'cost' => 234, 'amount' => 12],
            ['name' => 'banana', 'cost' => 567, 'amount' => 0],
        ]);
    }
}
