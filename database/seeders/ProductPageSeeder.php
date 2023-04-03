<?php

namespace Database\Seeders;

use App\Models\ProductPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $templates=[];

        for($i=1; $i<=15; $i++){
            $templates[]=[
                'name' => "Page-$i",
                "created_at" => now(),
                "updated_at" => now(),
            ];

        }

        ProductPage::insert($templates);

    }
}
