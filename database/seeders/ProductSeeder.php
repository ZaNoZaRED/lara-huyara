<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Orange',
                'cost' => 500,
                'amount' => 27,
                
            ],
            [
                'name' => 'Banana',
                'cost'  => 100,
                'amount'  => 17,
                
            ],
            [
                'name' => 'Bread',
                'cost'  => 75,
                'amount'  => 0,
                
            ],
        ]);
    }
}
