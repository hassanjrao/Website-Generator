<?php

namespace Database\Seeders;

use App\Models\HeaderTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $headerTemplates=[];

        for($i=1; $i<=10; $i++){
            $headerTemplates[]=[
                'name' => "Header-$i",
                "created_at" => now(),
                "updated_at" => now(),
            ];

        }

        HeaderTemplate::insert($headerTemplates);
    }
}
