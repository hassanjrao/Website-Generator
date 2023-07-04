<?php

namespace Database\Seeders;

use App\Models\PageLayout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageLayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layouts = [
            [
                "id" => 1,
                "name" => "Header",
                "code" => "header",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 2,
                "name" => "Hero Section",
                "code" => "heroSection",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 3,
                "name" => "About Section",
                "code" => "aboutSection",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 4,
                "name" => "Popular Product Section",
                "code" => "popularProductsection",
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "id" => 5,
                "name" => "Features Section",
                "code" => "featuresSection",
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "id" => 6,
                "name" => "Contact",
                "code" => "contactSection",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 7,
                "name" => "CTA Section",
                "code" => "ctaSection",
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "id" => 8,
                "name" => "Product Section",
                "code" => "productSection",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 9,
                "name" => "Footer",
                "code" => "footer",
                "created_at" => now(),
                "updated_at" => now(),
            ],

        ];

        PageLayout::insert($layouts);

    }
}
