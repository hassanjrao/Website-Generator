<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SloganSeeder::class,
            TaglineSeeder::class,
            AboutUsTitleSeeder::class,
            AboutUsDescriptionSeeder::class,
            ShopTitleSeeder::class,
            ButtonNameSeeder::class,
            PopularTitleSeeder::class,
            ContactTitleSeeder::class,
            ContactContentSeeder::class,
        ]);
    }
}
