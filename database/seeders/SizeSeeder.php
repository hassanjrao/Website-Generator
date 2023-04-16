<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SNMP;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes= [
            [
                "id" => 1,
                "name" => "S",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 2,
                "name" => "M",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 3,
                "name" => "L",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 4,
                "name" => "XL",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 5,
                "name" => "2XL",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 6,
                "name" => "3XL",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        Size::insert($sizes);
    }
}
