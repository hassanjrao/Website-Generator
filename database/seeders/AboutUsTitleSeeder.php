<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aboutUsTitle = array(
            1 => 'About Us',
            2 => 'Shop With Us',
            3 => 'Why Choose Us',
            4 => 'About',
            5 => 'Who We Are',
            6 => 'Our Company',
            7 => 'Our Mission',
            8 => 'Why Buy From Us',
            9 => 'Why Us?',
            10 => 'What Sets Us Apart',
            11 => 'Get To Know Us',
            12 => 'Read About Us',
            13 => 'Our Story',
            14 => 'Who Are We?',
            15 => 'Welcome To Our Store',
            16 => 'Meet Our Brand',
            17 => 'Learn About Us',
            18 => 'Explore Our Store',
            19 => 'Why We Rock!',
            20 => 'Reasons To Count On Us',
            21 => 'Our Philosophy',
            22 => 'Our Goals',
            23 => 'Company Overview',
            24 => 'Who We Are',
            25 => 'A Brief Introduction About Us',
            26 => 'Discover Us',
            27 => 'Our Story',
            28 => 'Welcome to Our Store',
            29 => 'Our Commitment to Excellence',
            30 => 'Our Mission and Values',
            31 => 'Our Journey',
            32 => 'We Are Commited & Dedicated',
            33 => 'More About Us',
            34 => 'The Company',
            35 => 'Learn More About Us',
            36 => 'Our Products and Services',
            37 => 'Our Core Values and Practices',
            38 => 'Meet the Team',
            39 => 'Our Company\'s History and Mission',
            40 => 'Our Core Values and Practices'
        );

        $aboutUsTitleArr=[];
        foreach ($aboutUsTitle as $key => $value) {
            $aboutUsTitleArr[]=[
                'title'=>$value,
                'created_by'=>1,
                'updated_by'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ];
        }

        \App\Models\AboutUsTitle::insert($aboutUsTitleArr);
    }
}
