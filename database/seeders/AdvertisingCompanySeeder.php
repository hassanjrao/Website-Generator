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
                'url' => 'https://dcconsulting.sticky.io/api/v1/new_order',
                'username' => 'dc_consulting_user',
                'password' => '32432fsd',
                'shipping_id' => 3,
                'compaign_id' => 262,
                'tran_type' => 'Sale',
                'offer_id' => 25,
                'billing_model_id' => 2,
                'gateway_id' => 0,
                "created_at" => now(),
                'updated_at' => now()
            ]
        );

        AdvertisingCompany::create(
            [
                "name" => "HMC Media",
                'url' => 'https://dcconsulting.sticky.io/api/v1/new_order',
                'username' => 'dc_consulting_user',
                'password' => '32432fsd',
                'shipping_id' => 3,
                'compaign_id' => 262,
                'tran_type' => 'Sale',
                'offer_id' => 25,
                'billing_model_id' => 2,
                'gateway_id' => 0,
                "created_at" => now(),
                'updated_at' => now()
            ]
        );

        AdvertisingCompany::create(

            [
                "name" => "True Digital Solutions",
                'url' => 'https://dcconsulting.sticky.io/api/v1/new_order',
                'username' => 'dc_consulting_user',
                'password' => '32432fsd',
                'shipping_id' => 3,
                'compaign_id' => 262,
                'tran_type' => 'Sale',          
                'offer_id' => 25,
                'billing_model_id' => 2,
                'gateway_id' => 0,
                "created_at" => now(),
                'updated_at' => now()
            ]
        );
    }
}
