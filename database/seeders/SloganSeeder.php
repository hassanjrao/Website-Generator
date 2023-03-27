<?php

namespace Database\Seeders;

use App\Models\Slogan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SloganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slogan = array(
            1 => 'In here, you\'ll always find what you need.',
            2 => 'Shop for the best deals on everything you love and need.',
            3 => 'Shop your way through our amazing products.',
            4 => 'This is a one stop shop for your everyday needs.',
            5 => 'Shop with confidence in our all in one store.',
            6 => 'Get ready to discover amazing items in our amazing store.',
            7 => 'Your shopping for a better life begins here.',
            8 => 'Shop the best products from all over the world.',
            9 => 'Find the best deals and shop the best products here with us.',
            10 => 'Shop smart and save big with us.',
            11 => 'Shop what you desire',
            12 => 'Your shopping experience redefined.',
            13 => 'We are the gateway for your unique shopping experience.',
            14 => 'Keep calm and keep shopping',
            15 => 'A place where you can buy anything',
            16 => 'One click away from getting what you want',
            17 => 'We provide hustle free and premium products.',
            18 => 'Amazing place for online shopping',
            19 => 'Your one stop destination for everything.',
            20 => 'Buy more, Pay less',
            21 => 'Enjoy the never ending shopping experience',
            22 => 'Stop thinking, start shopping',
            23 => 'We Make Shopping Easy.',
            24 => 'The Best Deals Ever!',
            25 => 'Buy What You Love, Love What You Buy.',
            26 => 'The Quality You Expect, The Price You Deserve',
            27 => 'The More You Buy, The More You Save!',
            28 => 'The Most Popular Items at the Lowest Prices',
            29 => 'Shop Every Day to Get The Best Deals.',
            30 => 'Good Things Come to Those Who Shop Around.',
            31 => 'Buy It Now, Get It Fast.',
            32 => 'New Arrivals All the Time.',
            33 => 'We Make Shopping Easy, So You Can Shop More.',
            34 => 'Look Sharp, Spend Less',
            35 => 'Every Day Is a Good Day to Shop.',
            36 => 'The Best Deals Are Waiting for You!',
            37 => 'Amazing Shopping Experience from The Comfort of Your Home.',
            38 => 'You Deserve the Best Selection and Lowest Prices Around!',
            39 => 'Satisfy Your Needs at An Affordable Price.',
            40 => 'Amazing Prices. Great choices.',
            41 => 'Here to make your shopping easier.',
            42 => 'Must have it? We\'ve got it.',
            43 => 'Where Quality Meets Savings.',
            44 => 'Your place for shopping and leisure.',
            45 => 'Where the world comes to shop',
            46 => 'It\'s never too late to buy something nice for yourself.',
            47 => 'Shop our store and satisfy your needs.',
            48 => 'Our prices are unbeatable!',
            49 => 'The best prices open to you.',
            50 => 'You never know what you might find at our store!',
            51 => 'Shop smarter, not harder. We\'re here for you.',
            52 => 'Find what you need, fast.',
            53 => 'Shop from the comfort of your home.',
            54 => 'Save time and money with us.',
            55 => 'Get the best deals online.',
            56 => 'Shop the latest trends, all in one place.',
            57 => 'Experience the convenience of online shopping.',
            58 => 'We\'ve got what you want, when you want it.',
            59 => 'Find the perfect gift for any occasion.',
            60 => 'Get the best deals on top brands.',
            61 => 'Shop online and save time and money.',
            62 => 'Experience the convenience of 24/7 shopping.',
            63 => 'Discover new products and amazing deals every day.',
            64 => 'Buy with confidence – we guarantee 100% satisfaction.',
            65 => 'Get the best prices on the latest products.',
            66 => 'Shop with us and get amazing discounts and promotions.',
            67 => 'Discover the best deals online with us.',
            68 => 'Get the best value for your money with us.',
            69 => 'Find everything you need in one place.',
            70 => 'Shop the world from your doorstep.'
        );

        $slogasArr=[];

        foreach ($slogan as $key => $value) {
            $slogasArr[]=[
                'title' => $value,
                "created_by" => 1,
                "updated_by" => 1,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        Slogan::insert($slogasArr);
    }
}
