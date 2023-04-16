<?php

namespace Database\Seeders;

use App\Models\CreditCard;
use App\Models\CreditCardSet;
use App\Models\CreditCardSetItem;
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

        CreditCardSet::insert([
            [
                "name"=>'Set 1',
                "created_at"=>now(),
                "updated_at"=>now(),
            ],

            [
                "name"=>'Set 2',
                "created_at"=>now(),
                "updated_at"=>now(),
            ],

        ]);


        CreditCardSetItem::insert([
            [
                'credit_card_set_id' => 1,
                'name' => 'Visa',
                'image' => 'visa.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'credit_card_set_id' => 1,
                'name' => 'Mastercard',
                'image' => 'mastercard.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'credit_card_set_id' => 1,
                'name' => 'Discover',
                'image' => 'discover.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'credit_card_set_id' => 2,
                'name' => 'Visa',
                'image' => 'visa.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'credit_card_set_id' => 2,
                'name' => 'Mastercard',
                'image' => 'mastercard.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'credit_card_set_id' => 2,
                'name' => 'Discover',
                'image' => 'discover.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
