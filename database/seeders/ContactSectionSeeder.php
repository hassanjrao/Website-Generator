<?php

namespace Database\Seeders;

use App\Models\ContactSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSectionSeeder extends Seeder
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

        ContactSection::insert($templates);
    }
}
