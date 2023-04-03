<?php

namespace Database\Seeders;

use App\Models\PopularTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PopularTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $popularTitle = array(
            1 => 'Featured Products',
            2 => 'Popular Products',
            3 => 'Hottest Sellers',
            4 => 'Recommended Products',
            5 => 'What\'s Trendy',
            6 => 'What\'s New',
            7 => 'Best Deals',
            8 => 'Must Have',
            9 => 'Selected For You',
            10 => 'Premium Selection',
            11 => 'What We Think You Will Like',
            12 => 'We Recommend',
            13 => 'Our Favorites',
            14 => 'Hot Products',
            15 => 'New Arrivals',
            16 => 'Featured Items',
            17 => 'Hottest Items',
            18 => 'Hot Deals',
            19 => 'Amazing Offers',
            20 => 'Top Sellers',
            21 => 'Best Sellers',
            22 => 'Most Popular Products',
            23 => 'Best-Selling Products',
            24 => 'Highly-Rated Products',
            25 => 'Popular Picks',
            26 => 'Top Trends',
            27 => 'Customer-Favorite Products',
            28 => 'Top-Selling Items',
            29 => 'Most Popular Items',
            30 => 'Best-Reviewed Products',
            31 => 'Trending Picks',
            32 => 'Must-Have Items',
            33 => 'Best-Loved',
            34 => 'Top New Items',
            35 => 'What\'s In',
            36 => 'In-Demand Items',
            37 => 'Spotlight Products',
            38 => 'New Items',
            39 => 'Latest Releases',
            40 => 'Just In'
        );

        $popularTitleArr=[];

        foreach ($popularTitle as $key => $value) {
            $popularTitleArr[] = [
                'title' => $value,
                'created_at' => now(),
                'updated_at' => now(),
                "created_by" => "1",
                "updated_by" => "1"
            ];
        }

        PopularTitle::insert($popularTitleArr);
    }
}
