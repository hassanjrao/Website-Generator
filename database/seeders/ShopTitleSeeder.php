<?php

namespace Database\Seeders;

use App\Models\ShopTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopTitle = array(
            1 => 'Shop',
            2 => 'Our Selection',
            3 => 'Browse Products',
            4 => 'Our Products',
            5 => 'What We Offer',
            6 => 'Products',
            7 => 'Our Store',
            8 => 'Online Store',
            9 => 'We Recommend',
            10 => 'The Shop',
            11 => 'Marketplace',
            12 => 'Featured Products',
            13 => 'Offer',
            14 => 'Our Collection',
            15 => 'Latest Products',
            16 => 'Shop Online',
            17 => 'The Goods',
            18 => 'Special Offers',
            19 => 'Great Selection',
            20 => 'Choose Your Products',
            21 => 'Discover Our Selection',
            22 => 'Shop Our Store',
            23 => 'Amazing Perfect Products',
            24 => 'Shop Our Collection',
            25 => 'See Our Collection',
            26 => 'Discover Our Products',
            27 => 'Find What You\'re Looking For',
            28 => 'Our Catalog',
            29 => 'Explore Unique Items',
            30 => 'View Our Products',
            31 => 'Shop Our Wide Selection',
            32 => 'Find What You Need in Our Store',
            33 => 'Discover Our Products',
            34 => 'We\'ve Got What You\'re Looking For',
            35 => 'Shop With Confidence',
            36 => 'Check Us Out',
            37 => 'Choose Our Items',
            38 => 'The Perfect Items',
            39 => 'Take a Tour',
            40 => 'What you seek'
        );

        $shopTitleArr=[];

        foreach ($shopTitle as $key => $value) {
            $shopTitleArr[] = [
                'id' => $key,
                'title' => $value,
                'created_at' => now(),
                'updated_at' => now(),
                "created_by" => "1",
                "updated_by" => "1"
            ];
        }

        ShopTitle::insert($shopTitleArr);
    }
}
