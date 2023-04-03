<?php

namespace Database\Seeders;

use App\Models\ProductSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSectionSeeder extends Seeder
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
                'name' => "Section-$i",
                "created_at" => now(),
                "updated_at" => now(),
            ];

        }

        ProductSection::insert($templates);
    }
}
