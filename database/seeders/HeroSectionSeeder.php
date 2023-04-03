<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
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

        HeroSection::insert($templates);
    }
}
