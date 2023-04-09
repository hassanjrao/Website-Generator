<?php

namespace Database\Seeders;

use App\Models\CreditCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreditCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CreditCard::insert([
            [
                'name' => 'Visa',
                'image' => 'visa.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mastercard',
                'image' => 'mastercard.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Discover',
                'image' => 'discover.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

    }
}
