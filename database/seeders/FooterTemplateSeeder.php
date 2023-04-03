<?php

namespace Database\Seeders;

use App\Models\FooterTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $footerTemplates=[];

        for($i=1; $i<=10; $i++){
            $footerTemplates[]=[
                'name' => "Footer-$i",
                "created_at" => now(),
                "updated_at" => now(),
            ];

        }

        FooterTemplate::insert($footerTemplates);
    }
}
