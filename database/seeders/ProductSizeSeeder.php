<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $product = Product::find(1);
        $product->sizes()->attach([1, 2, 3, 4, 5, 6]);


        $product = Product::find(2);
        $product->sizes()->attach([1, 2, 3]);
    }
}
