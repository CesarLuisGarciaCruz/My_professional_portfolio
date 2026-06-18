<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $products = [
            [
                'name' => 'Arroz',
                'price' => 29.25,
                'description' => 'Verde Valle Arroz Súper Extra 900 g',
                'image_path' => 'img/arroz.jpg',
            ],
            [
                'name' => 'Caldo de Pollo en polvo',
                'price' => 18.50,
                'description' => 'Knorr® Caldo de Pollo en polvo de 200 gramos...',
                'image_path' => 'img/caldo.jpg',
            ],
            // continúa...
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
