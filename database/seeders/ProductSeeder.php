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
            'description' => '
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel non voluptates sed delectus quia doloribus vitae, asperiores similique deserunt? Repudiandae numquam unde corrupti quos eum maxime, labore magni tempore porro.',
            'price' => '20.000',
            'stock' => '3',
            'image' => 'burger.png',
        ]);
    }
}
