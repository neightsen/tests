<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            Product::create([
                'name' => 'Orange',
                'amount' => '27',
                'cost' => 50000000,
            ]);
    
            Product::create([
                'name' => 'Banana',
                'amount' => '17',
                'cost' => 120000000,
            ]);
    
            Product::create([
                'name' => 'Bread',
                'amount' => '0',
                'cost' => 70000000,
            ]);
        }
    }
}
