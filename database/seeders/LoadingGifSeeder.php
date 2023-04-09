<?php

namespace Database\Seeders;

use App\Models\LoadingGif;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoadingGifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loadingGifs=[];

        for($i=1; $i<=10; $i++){
            $loadingGifs[]=[
                'image' => "$i.gif",
                "created_at" => now(),
                "updated_at" => now(),
            ];

        }

        LoadingGif::insert($loadingGifs);
    }
}
