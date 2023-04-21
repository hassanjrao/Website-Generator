<?php

namespace Database\Seeders;

use App\Models\BillingModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillingModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BillingModel::insert([
            [
                "name"=>"SS",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name"=>"Trial",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name"=>"SS+Trial",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name"=>"SS+CON",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name"=>"Trial+CON",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name"=>"SS+Trial+CON",
                "created_at"=>now(),
                "updated_at"=>now()
            ]
        ]);
    }
}
