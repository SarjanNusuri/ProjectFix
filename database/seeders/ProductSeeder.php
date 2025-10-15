<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Product;
class ProductSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'mie ayam bakar',
            'description' => 'mi ayam super enak',
            'price' => '20.000',
            'stock' => '3',
            'image' => 'burger.png',
        ]);
    }
}
