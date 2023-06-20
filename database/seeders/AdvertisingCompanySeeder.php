<?php

namespace Database\Seeders;

use App\Models\AdvertisingCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvertisingCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdvertisingCompany::create(
            [
                "name" => "DC Consulting",

            ]
        );

        AdvertisingCompany::create(
            [
                "name" => "HMC Media",

            ]
        );

        AdvertisingCompany::create(

            [
                "name" => "True Digital Solutions",
                
            ]
        );
    }
}
