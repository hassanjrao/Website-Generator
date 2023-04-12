<?php

namespace Database\Seeders;

use App\Models\HeaderTemplate;
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
            ContactTitleSeeder::class,
            ContactContentSeeder::class,
            PopularTitleSeeder::class,
            HeaderTemplateSeeder::class,
            HeroSectionSeeder::class,
            ProductSectionSeeder::class,
            AboutSectionSeeder::class,
            ContactSectionSeeder::class,
            PopularProductSectionSeeder::class,
            CtaSectionSeeder::class,
            FeatureSectionSeeder::class,
            FooterTemplateSeeder::class,
            ProductPageSeeder::class,
            CheckoutPageSeeder::class,
            LoadingGifSeeder::class,
            CreditCardSeeder::class,
            RelatedProductSectionSeeder::class,
            SortProductBysSeeder::class,
            AdvertisingCompanySeeder::class,
            ProductSeeder::class,
            ProductCategorySeeder::class,
        ]);
    }
}
