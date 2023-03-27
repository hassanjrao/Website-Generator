<?php

namespace Database\Seeders;

use App\Models\AboutUsDescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aboutUsDescription = array(
            1 => 'Do you want bang for the buck products? Then you came to the right store as that is our company\'s main focus. To bring out quality items for the most affordable prices.',
            2 => 'Our company is focused on providing whatever it is that is in trend or what is needed. Our motto is Whatever you have as a main priority, we have it here',
            3 => 'We update our products everyday and main its quality to ensure that we provide the best for our best customers.',
            4 => 'We give you a whole new shopping experience to make shopping fun and affordable.',
            5 => 'We\'re providers of great! We provide and maintain great quality products for the satisfaction of our customers.',
            6 => 'Our purpose to provide great service and great products.',
            7 => 'Our products are always changing to adapt to the latest trends to satisfy our current and future customers!',
            8 => 'The search is over! Welcome to our one stop shop wherein you can find everything that you want and everything that you\'ll ever want.',
            9 => 'The goal of our company is to ease the process of shopping, which is why we deliver everything right at your doorstep! Click now and we deliver tomorrow!',
            10 => 'Our shop has no limit! We are here to provide you a variety of premium choices at affordable prices.',
            11 => 'Welcome to our store! We are here to give you our amazing service with our amazing products! Check out our inventory now!',
            12 => 'We know you want the best, which is why we have gathered the best and unique products in our store to provide you with everything that you need and want.',
            13 => 'Our online store is always here to serve you only the best! What are you waiting for? ',
            14 => 'Premium, High Quality and Affordable Products! That is what we are all about and we plan to keep it that way while maintaining high level of service.',
            15 => 'This is more than just a store! Our shop is a place of needs and wants. Anything you want or need, we have it. We are always updated and always changing.',
            16 => 'We have evolved from a simple store into great and all in one provider of trending items! We will always maintain our premium items and great service.',
            17 => 'Are you on the look out for unique and amazing products? Something that is not in every other store out there? Then welcome to our unique one stop shop that will make you want to buy things that you need and don\'t need!',
            18 => 'Welcome shopper! Explore our variety of products and enjoy the cheap prices that we have here. These affordable prices are especially made for our special customers to make their days even more special!',
            19 => 'Our store revolves around 2 things, that is affordability and quality of the products that we have and will have here in our site. With this in mind, rest assured that everything that we will serve is in its best and high quality condition followed by a cheap price.',
            20 => 'Who says that you need to spend a lot in order to get high end products? Well that\'s not how we do it in our store. In here, we believe that great and premium things can be purchased at the most affordable prices. So what are you waiting for? Go and browse in our store and take a look at our amazing products!',
            21 => 'We put a lot of effort and work, in order to provide the most amazing premium and affordable products at there in the market, and put it here in our store!',
            22 => 'Why are you holding out? Visit us to experience our superb service and learn more about what we have to offer. Browse our extensive selection of high quality goods offered at unbelievable discounts. Spend money now and save a lot.',
            23 => 'Welcome to the place where you can find all of your favorite products. We are committed to giving you the best products possible, placing a strong emphasis on both value and quality.',
            24 => 'You are in the proper place if you seek the best and most spectacular stuff. We provide the most fantastic, high quality goods available.',
            25 => 'You won\'t find a better selection of products of higher quality anywhere else than what we have to offer. Start your purchases here!',
            26 => 'We provide you with the broadest range of top notch goods. Don\'t believe anything we say. Place your purchase right now!',
            27 => 'We can help if you\'re looking for the highest quality and most distinctive products. We offer a huge range of excellent products.',
            28 => 'It has never been so simple to find high quality products. We are the ideal supplier of premium quality products at competitive prices.',
            29 => 'Are you willing to accept our remarkable offers? We are here to offer the highest quality goods at the most affordable pricing imaginable!',
            30 => 'We swore to uphold high standards of quality and to always adhere to those standards in everything we do, both to ourselves and to our clients.',
            31 => 'Offering a great variety of outstanding products with excellent quality standards and competitive pricing. Stop holding off and start saving with us.',
            32 => 'Find the greatest items at your preferred one stop shop, and prepare to be astounded by the incredible deals.',
            33 => 'We are delighted by and grateful for your visit to our website. We strive to give you the finest service possible while also giving you high quality items since we love our clients and want to keep them.',
            34 => 'In order to improve their experience and encourage them to return because we care, we are working hard to deliver the least expensive and most dependable items to our cherished clients.',
            35 => 'We established this store to provide you with a vast selection of goods you didn\'t know you needed! Our shop offers a unique experience that is unmatched.',
            36 => 'We all desire the finest, which is what we all want. We are prepared to provide you everything at its finest since we just want the best for you.',
            37 => 'Our business is here to give you everything you want and need at the lowest prices on the market.',
            38 => 'Every business has its unique success formula. The quality of the services and goods that we offer and supply is our secret.',
            39 => 'We all desire the finest, which is what we all want. We are prepared to provide you everything at its finest since we just want the best for you.',
            40 => 'Because our firm only employs excellent individuals, we only offer premium items to our most loyal clients. You are that!',
            41 => 'Our business pays attention to what is required, what is vital, and what is popular today, which is why we have high quality and well liked items in our shop.',
            42 => 'Do you desire the top things at the lowest prices? Given that we have both of what you\'re seeking for, you\'ve come to the perfect place. One of our primary offerings is Top Quality and Low Price',
            43 => 'We are here to provide you with fantastic goods at reasonable costs, hence the phrase Bang for Your Buck.',
            44 => 'Enjoy looking at the goods we have featured on our website. Our staff carefully selects these depending on what\'s new and how well made it is. We are present and available to help.',
            45 => 'To assist our consumers obtain what they want at a fair price, our primary objective is to offer superior products that are as inexpensive as possible.',
            46 => 'Our purpose is straightforward: to assist you in saving money at the checkout. We have compiled a list of some of the most reasonably priced high quality items on the market.',
            47 => 'We are all about three things: premium, low cost, and high quality products that will undoubtedly meet your needs.',
            48 => 'We are here to assist you. We offer excellent service. We offer great quality products for low prices. Everything is available in our shop!',
            49 => 'Our organization is here to give you with whatever you want and desire, all at the most competitive pricing on the market.',
            50 => 'You will undoubtedly return to our store for more, since we offer a lot of things that will pique your interest.',
            51 => 'Welcome to our company! We are a team of dedicated professionals who are passionate about what we do. Our mission is to provide top-quality products and services to our customers, and we strive to exceed their expectations every day.',
            52 => 'Our company was founded on the principles of integrity, innovation, and customer satisfaction. We take pride in our work and are committed to providing the best experience possible for our clients. We are here to provide whatever it is that you may need.',
            53 => 'We are a "customer-comes-first" type of business, with a long history of serving our community. Our team is made up of skilled professionals who are dedicated to delivering the best products and services to our customers.',
            54 => 'Our store was founded on the principles of convenience and affordability. We are committed to making shopping easy and accessible for our customers, and we offer a variety of payment options and fast shipping to ensure a hassle-free experience.',
            55 => 'We take pride in our commitment to sustainability and ethical practices. We are dedicated to using environmentally friendly materials and processes in all of our operations. We also provide great customer service followed by convenience in shopping through nationwide delivery.',
            56 => 'Our success is built on the relationships we have with our customers and partners. We value open communication and are always looking for ways to exceed their expectations. We also give importance to the quality and affordable of the products in our inventory.',
            57 => 'We are always looking for new opportunities to grow and expand our business. Whether it\'s through partnerships, new product lines, or entering new markets, we are constantly seeking out ways to drive success and deliver value to our customers.In addition to our core products and services, we also offer a range of support and training options to help our customers get the most out of their experience with us.',
            58 => 'Our company focuses on providing affordable and top notch quality products. We also believe in the power of diversity and inclusion and strive to create a workplace that is welcoming and supportive of all individuals.',
            59 => 'Our one-stop-shop provides our customers with only the best when it comes to the quality of the products and its affordability. Our website is also user-friendly and easy to navigate, with advanced search and filtering options to help customers find exactly what they\'re looking for.',
            60 => 'Affordability and Quality are our top 2 concerns when it comes to our business. We want our customers to be able to purchase high end products at a very affordable costs. Also, Our team is dedicated to delivering the highest level of customer service and satisfaction. We offer fast and reliable shipping, easy returns, and responsive customer support to ensure that our customers have a seamless shopping experience.',
            61 => 'Our store is dedicated to providing the best shopping experience possible. From the quality of our products to the convenience of our website, we strive to go above and beyond for our customers.',
            62 => 'At our store, we believe in the power of convenience. We offer fast shipping and a variety of payment options to make shopping easy and hassle-free for our customers. We will deliver high end products in their 100% condition.',
            63 => 'Our store is built on a foundation of quality and affordability. We offer a wide range of products at competitive prices, and we are always looking for ways to improve and grow. We will never stop providing top notch products followed by amazing customer service.',
            64 => 'We are a store that focuses on customer satisfaction and high product quality. Our team is dedicated to providing top-notch service and ensuring that our customers have a positive shopping experience. We provide the best items to our best customers.',
            65 => 'We are constantly expanding our product offerings and are always on the lookout for new and innovative products to add to our store. We strive to provide our customers with the best selection and value for their money.',
            66 => 'We are an online store with a commitment to maintaining product quality and customer satisfaction. In addition to offering eco-friendly and affordable products, we also support various charitable initiatives. We are committed to delivering the best shopping experience possible and look forward to serving you.',
            67 => 'We are dedicated to providing top-notch customer service. Whether you have a question about a product or need help with an order, our team is always here to assist you. Other than customer service, we provide 100% affordable products at reasonable prices.',
            68 => 'Our store revolves around the power of choice. We offer a wide range of products in various categories, so you can find exactly what you\'re looking for at the best price. Not only that, we also provide great customer service for our customers who are in need of assistance.',
            69 => 'We are a customer-focused online store, committed to delivering a seamless shopping experience for our clients. Our team is made up of skilled professionals who are dedicated to providing top-notch service. We take care of our items and deliver them in perfect conditions.',
            70 => 'We are dedicated to providing top-quality products at affordable prices. We have a wide selection of items in various categories, and we are constantly adding new products to our inventory. We also provide a 24/7 support system to ensure the satisfaction of our customers.'
        );


        $aboutUsDescriptionArr = [];

        foreach ($aboutUsDescription as $key => $value) {
            $aboutUsDescriptionArr[] = [
                'description' => $value,
                "created_at" => now(),
                "updated_at" => now(),
                "created_by" => 1,
                "updated_by" => 1,
            ];
        }

        AboutUsDescription::insert($aboutUsDescriptionArr);
    }
}
