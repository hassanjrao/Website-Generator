<?php

namespace Database\Seeders;

use App\Models\ButtonName;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ButtonNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buttonName = array(
            1 => 'Buy Now',
            2 => 'Place Order',
            3 => 'Start Shopping',
            4 => 'Make Purchase',
            5 => 'Shop',
            6 => 'Get Started',
            7 => 'Add to Cart',
            8 => 'View Products',
            9 => 'Shop Now',
            10 => 'Purchase',
            11 => 'Select Product',
            12 => 'Click To Shop',
            13 => 'Buy It Now',
            14 => 'Get Product  ',
            15 => 'Learn More',
            16 => 'Show More',
            17 => 'See Details',
            18 => 'Start Order',
            19 => 'Discover',
            20 => 'Explore',
            21 => 'Buy & Save',
            22 => 'Shop It',
            23 => 'Claim',
            24 => 'Choose',
            25 => 'Buy & Enjoy',
            26 => 'Get',
            27 => 'View',
            28 => 'Grab Item',
            29 => 'Grab',
            30 => 'Secure Item',
            31 => 'Order Now',
            32 => 'Add to Order',
            33 => 'View More',
            34 => 'Purchase Item',
            35 => 'Secure',
            36 => 'Get It Now',
            37 => 'Check Now',
            38 => 'Shop Now',
            39 => 'Browse',
            40 => 'View'
        );

        $buttonNameArr=[];

        foreach ($buttonName as $key => $value) {
            $buttonNameArr[] = [
                'id' => $key,
                'title' => $value,
                'created_at' => now(),
                'updated_at' => now(),
                "created_by" => "1",
                "updated_by" => "1"
            ];
        }

        ButtonName::insert($buttonNameArr);
    }
}
