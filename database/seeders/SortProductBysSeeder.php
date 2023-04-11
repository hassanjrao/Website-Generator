<?php

namespace Database\Seeders;

use App\Models\SortProductBy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SortProductBysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sortProducts = [];

        $sortProducts = [
            [
                'name'=>'Alphabetical: A-Z',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'=>'Reverse Alphabetical: Z-A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'=>'Price: Low to High',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'=>'Price: High to Low',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'=>'Newest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'=>'Oldest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'=>'Shortest Product Name to Longest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'=>'Longest Product Name to Shortest',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        SortProductBy::insert($sortProducts);
    }
}
