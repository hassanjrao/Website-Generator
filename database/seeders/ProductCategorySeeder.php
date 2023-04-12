<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "Apparel 1",
                'advertising_company_id' => '3',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Apparel 2",
                'advertising_company_id' => '3',
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];

        ProductCategory::insert($data);
    }
}
