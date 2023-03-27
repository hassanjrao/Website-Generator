<?php

namespace Database\Seeders;

use App\Models\TagLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaglineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taglines = array(
            1 => 'A few clicks is all it takes.',
            2 => 'All the best for a whole lot less',
            3 => 'An exciting place for you to shop.',
            4 => 'We are anything but ordinary',
            5 => 'Discover your favorite place to shop',
            6 => 'Every product delivered to you',
            7 => 'Shop better, feel better',
            8 => 'For the person who has everything, we have everything else.',
            9 => 'If we don\'t sell it, you won\'t need it.',
            10 => 'Lowest prices guaranteed!',
            11 => 'The best is what we\'re all about.',
            12 => 'The one stop all around shop.',
            13 => 'Where else? Than here.',
            14 => 'You need it, we\'ve got it.',
            15 => 'You want lower prices, we hear you.',
            16 => 'Shop with us and see how great we are!',
            17 => 'Be free to get what you need online!',
            18 => 'Quality Matters Here!',
            19 => 'Everything you need, and nothing you don\'t.',
            20 => 'We Sell For Less!',
            21 => 'The Best of Everything, Naturally',
            22 => 'You\'ll Like Our Selection',
            23 => 'We maximize customer value!',
            24 => 'Quality. Choice. Value.',
            25 => 'Everyday Deals For Everyday People',
            26 => 'The Store With More For Less',
            27 => 'We have everything you want at the lowest prices possible',
            28 => 'Get more for your money',
            29 => 'The ultimate shopping experience',
            30 => 'Shopping gets the mood rolling',
            31 => 'Shop today, enjoy tomorrow.',
            32 => 'Our store will inspire you to buy more.',
            33 => 'We have what you seek',
            34 => 'You need it, you want it, we got it.',
            35 => 'Shop smart, shop online',
            36 => 'We\'ve got what you\'re looking for!',
            37 => 'Finding the perfect item has never been easier',
            38 => 'The quality product you expect.',
            39 => 'We make online selling superbly easy',
            40 => 'Special products for our special customers.',
            41 => 'Combining quality and reliability in one place!',
            42 => 'We deliver more than your expectations',
            43 => 'We got it all for you!',
            44 => 'One stop solution for all your needs',
            45 => 'The most reliable site for your shopping needs',
            46 => 'You\'ll never know what you\'ve been missing until you shop with us.',
            47 => 'Shopping is fun again!',
            48 => 'A place where you can find anything and everything for your home',
            49 => 'Find it here, buy it now',
            50 => 'You\'ll always have a great selection with all the latest trends just a click away!',
            51 => 'A dynamic shopping experience.',
            52 => 'All you need is here!',
            53 => 'You\'re bound to find more.',
            54 => 'We make shopping easy.',
            55 => 'The Internet’s largest online store.',
            56 => 'The best value in the neighborhood.',
            57 => 'The best is what we’re all about.',
            58 => 'Right store. Right price.',
            59 => 'We go above and beyond what you expect.',
            60 => 'We provide everything you need at the most affordable pricing.',
            61 => 'Shop with us and get the best deals online.',
            62 => 'Discover the latest trends, all under one roof.',
            63 => 'Shop with us and shop with peace of mind.',
            64 => 'Find what you love, at a price you\'ll love.',
            65 => 'The best deals are just a click away.',
            66 => 'The best prices, the best selection.',
            67 => 'Get the greatest online prices when you shop with us.',
            68 => 'Find the perfect gift, every time.',
            69 => 'Experience the convenience of online shopping with us.',
            70 => 'Hassle-free shopping, every time.'
        );

        $taglineArr=[];

        foreach($taglines as $tagline){
            $taglineArr[]=[
                "title"=>$tagline,
                "created_by"=>1,
                "updated_by"=>1,
                "created_at"=>now(),
                "updated_at"=>now(),
            ];
        }

        TagLine::insert($taglineArr);


    }
}
