<?php
//<!--********************
//    Version 3.4
//********************-->

require_once __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'helper.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'verbiage.php';

$products = array(
    //Product Array - paste under this line

    'product1' => array(
        'id' => '11',
        'stickyId' => 232,
        'name' => 'Mini USB Lamp',
        'description' => 'Eye-caring USB Light:Energy efficient LED beads,soft light protect your vision from injury
                <br><br>Portable LED Reading Lamps:Portable USB light,handy in different occasions such as bedroom night light,outdoor camping,book reading,working and writing in night with your laptop.
                <br><br> Power Source Supply:Powered by various USB devices (5V, 0.5-2A),such as USB adapter,power bank,laptop,computer,USB ports.
                <br><br>Environmental Protection:Item is made of environmental friendly silicone and metal,no harmful objects and no battery contained
                <br><br>Flexible USB Lamp:Flexible neck,the lampshade is bendable and can be 360 degrees twisted and tilted<br><br>
                <strong>Additional Info</strong><br>
                Material:Silicone, Tpe<br>
                Color:blue',
        'image' => 'products/Mini USB Lamp.jpg',
        'show_ingredients' => 'yes',
        'ingredients_image' => 'ingredients/keto.jpg',
        'category' => 'Gadget',
        'billingModel' => '5',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '91.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days)
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '10',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '3.99'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '5.96'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '7.95'
            ),
            'shop_option4' => array(
                'option_quantity' => '4',
                'option_price' => '9.97'
            ),
            'shop_option5' => array(
                'option_quantity' => '7',
                'option_price' => '14.95'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product2' => array(
        'id' => '12',
        'stickyId' => 233,
        'name' => 'Webcam Cover (3 Pack)',
        'description' => 'Covers your webcam when not in use and prevents webcam hackers from spying on you. Slides open when you need to use your webcam. Locks in place to ensure cover does not slide open.
                <br><br>Its crucial that your webcam cover does not interfere with your ability to completely close / fold your laptop. This camera cover is only 0.8mm (0.027 inches) thin can therefore be used on even the thinnest laptops
                <br><br>Our engineers have upgraded our webcam covers to a better, stronger, more durable 3M adhesive. Will not damage your devices, but has a much stronger hold on more types of devices.
                <br><br>This camera cover can be used on most webcams on your device as long as the surface around the webcam is flat. We have tested it on a diversity of brands such as Apple, Dell, Surface, Acer, Asus, Samsung, Lenovo and many others.
                <br><br>Applying the camera cover is incredibly simple. Within 5 seconds you are able to apply the webcam cover to your device.<br><br>
                <strong>Additional Info</strong><br>
                Color: Black<br>
                Quantity: 3 x Adhesive Webcam Cover<br>
                Size: 0.7&quot; x 0.35&quot; x 0.026&quot;<br>
                Packing size: 6.38 x 3.82 x 0.43 inches',
        'image' => 'products/Webcam Cover 3 Pack.jpg',
        'show_ingredients' => 'yes',
        'ingredients_image' => 'ingredients/keto.jpg',
        'category' => 'Gadget',
        'billingModel' => '5',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '91.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days)
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '10',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '4.99'
            ),
            'shop_option2' => array(
                'option_quantity' => '3',
                'option_price' => '13.99'
            ),
            'shop_option3' => array(
                'option_quantity' => '5',
                'option_price' => '19.99'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product3' => array(
        'id' => '13',
        'stickyId' => 234,
        'name' => 'LED Smart Desk Lamp',
        'description' => 'Auto-Dimming Smart Lamp - Intelligently sense the brightness of the room environment, dynamically optimize the room lighting balance for delivering a smooth light
                <br><br>47 &quot; Wide Rectangular Illumination - 0°-180°angle adjustment, lights up your entire desk (47 inches), which is 175% wider than typical desk lamps. The center illuminance can reach up to 940 Lux.
                <br><br> 4 lighting modes for your choice: Focus mode, read mode, PC mode and kid mode
                <br><br>Born for Eye-Caring, Built-in 32 natural full-spectrum energy-efficient LED, create true-to-life and comfortable light. make the colors more vivid and accurate while painting.
                <br><br>Adjustable Brightness & 3 Color Temperature - Touch control, warm light for reading or bedroom, mix light for living room or home, cool light for office working.
                <br><br>Ultimate Wireless Experience - Wherever you go, built-in 2200mAh battery that keeps stayin’ up to 13 Hrs alive. Fully charged in just 3 Hrs. Great for emergency, reading, painting, working, or studying<br><br>
                <strong>Additional Info</strong><br>
                Color:Metallic Silver<br>
                Weight:100grams<br>
                Charging Time: 3hrs',
        'image' => 'products/LED Smart Desk Lamp.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.jpg',
        'category' => 'Gadget',
        'billingModel' => '5',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '91.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days)
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '10',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '29.99'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '49.50'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '63.71'
            ),
            'shop_option4' => array(
                'option_quantity' => '4',
                'option_price' => '75.97'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product4' => array(
        'id' => '14',
        'stickyId' => 235,
        'name' => 'Target LED Alarm Clock',
        'description' => 'PERSONALIZED SOUND DESIGN CLOCK - The target clock supports to record your personal clock sound as you want, bringing you more choices, and giving you a chance to show your unique alarm sound.
                <br><br>12-hour display, Requires 4 AA batteries (not included), Dimensions: 5. 25x5. 5x1. 75 inches.
                <br><br> The target clock owns two modes, the normal mode allows you to stop the alarm sound by pressing button or aim the target with the infrared gun; The hard mode only supports to stop the alarm sound by pressing the button. You can choose the modes according to your practical situation.<br><br>
                <strong>Additional Info</strong><br>
                Color:White<br>
                Weight:10grams<br>
                Charging Time:2hrs',
        'image' => 'products/Target LED Alarm Clock.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.jpg',
        'category' => 'Gadget',
        'billingModel' => '5',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '91.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days)
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '10',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '21.99'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '39.99'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '56.92'
            ),
            'shop_option4' => array(
                'option_quantity' => '4',
                'option_price' => '73.21'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product5' => array(
        'id' => '15',
        'stickyId' => 236,
        'name' => 'Wireless Charger Stand',
        'description' => ' The charging dock station thickness less than 0.6 inches when folded, just takes up little spaceis. The charger holder folded stand also can adjust metal bracket to support comfortable angle that you want.The horizintal and vertical screen can also charger working. to make your desktop and nightstand more and tidy. This wireless charger stand can charge four devices at the same time, which is convenient for your life.
                <br><br>The charger stand holder Universal Desktop Charging Stand 30 degree Ergonomic Design allows users to charge cellphone.The wireless charging pad supports charge your for iWatch, iPhone and Airpods at the same time and in one place. The experience of 4 in 1 Wireless Charger dock looks compact and elegant, perfectly decorates your bedroom, office desk.This wireless charger stand can charge four devices at the same time, which is convenient for your life.<br><br>
                <strong>Additional Info</strong><br>
                With Charging Indicator<br>
                Connector Type: Type C<br>
                Charging current: 3000mA',
        'image' => 'products/Wireless Charger Stand.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.jpg',
        'category' => 'Gadget',
        'billingModel' => '5',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '91.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days)
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '10',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '44.91'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '54.98'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '67.43 '
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product6' => array(
        'id' => '16',
        'stickyId' => 237,
        'name' => 'Multi-Device Rechargeable Wireless Bluetooth Keyboard',
        'description' => 'The Wireless bluetooth keyboard works with your smartphone, tablet and all Bluetooth wireless devices with external keyboard support. Wireless range 10 meters.
                <br><br>Quick connect and switch between 2 devices at the same time.
                <br><br>Bright color ergonomic keyboard uses a round keycap with a matte feel and concave arc of the keycap to make your finger shape more comfortable, which reduce the wrong input effectively and make the “press” softer and quicker.
                <br><br>The built-in slot in the back edge keeps your devices in place and at the optimal viewing angle for a comfortable reading and typing experience. Support up to 12.9in tablet.
                <br><br>Bluetooth rechargeable keyboard built-in 180mAh Li-ion Battery, 2 hours full charge, above 40 hours uninterrupted work. It will automatically enter sleep mode to save power and press any key to wake it up.<br><br><strong>Additional Info</strong><br>
                Precise Light-Touch Typing<br>
                Wireless Bluetooth Connection',
        'image' => 'products/Multi-Device Rechargeable Wireless Bluetooth Keyboard.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.jpg',
        'category' => 'Gadget',
        'billingModel' => '5',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '91.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days)
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '10',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '49.95'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '59.98'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '72.97'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    )


    //End of Product Array
);



//Website Content
$updateContent = array(
    'slogan'        => Info::$slogan[1],            // choose 1-70
    'tagline'       => Info::$tagline[1],           // choose 1-70
    'aboutUsTitle'  => Info::$aboutUsTitle[1],      // choose 1-40
    'aboutUs'       => Info::$aboutUs[1],           // choose 1-70
    'shopTitle'     => Info::$shopTitle[1],         // choose 1-40
    'buttonName'    => Info::$buttonName[1],        // choose 1-40
    'popularTitle'  => Info::$popularTitle[1],      // choose 1-40
    'contactTitle'  => Info::$contactTitle[1],      // choose 1-40
    'contactContent'  => Info::$contactContent[1]   // choose 1-70
);

//Website Theme
$pageConfig =  array(
    'header_template' => 1,             // choose 1-15
    'hero_section' => 1,                // choose 1-15
    'product_section' => 14,             // choose 1-15
    'about_section' => 1,               // choose 1-12
    'contact_section' => 1,             // choose 1-10
    'popularProducts_section' => 1,     // choose 1-13
    'cta_section' => 1,                 // choose 1-2
    'features_section' => 1,            // choose 1-9
    'footer_template' => 1,             // choose 1-8

    'product_page' => 1,                // choose 1-2
    'checkout_page' => 1,               // choose 1-7

    'relatedProducts_section' => 1,      // choose 1
    // If you want to hide any section select 0

    'indexSectionsOrder' => [ //just order the lines like you want it to be ordered
        'productSection',
        'aboutSection',
        'contactSection',
        'popularProductsection',
        'ctaSection',
        'featuresSection',
    ],

    'font' => 15, // 1-Open Sans ; 2-Alegreya ; 3-Poppins ; 4-Roboto ; 5-Montserrat ; 6-Lato ; 7-Oswald ; 8-Raleway ;
    // 9-Mulish ; 10-Nunito ; 11-Assistant ; 12-Barlow ; 13-Rubik ; 14-Work Sans ; 15-Mukta

    // CSS Colors for theme using HEX or rgba (Can also write Transparent, white, red or basic colors)
    'primary_color' => '#620000',      //Accent Color on most elements like buttons bottom header
    'primary_text_color' => '#fff',    //Text to be used on Primary background color
    'secondary_color' => '#000000',    //Elements which dont have primary color will use this
    'secondary_text_color' => '#fff',  //Text to be used on secondary background color
    // Header Colors
    'topbar_bg_color' => '#ffecea',
    'topbar_text_color' => '#444',
    'header_bg_color' => '#fff',
    'header_text_color' => '#222',
    'header_icon_color' => '#620000',
    // Banner and Button Colors
    'banner_overly_color' => '#00000069',
    'banner_text_color' => '#fff',
    'button_bg_color' => '#620000',
    'button_text_color' => '#fff',
    'button_bg_color_hover' => '#000000',
    'button_text_color_hover' => '#fff',
    // Footer Colors
    'footer_bg_color' => '#333',
    'footer_text_color' => '#fff',

    'displayCategory' => 'no', //this toggles the category on the index and product page

    'displayBillingModel' => 'yes', //this toggles the billing model on the index and product page

    'displayRelatedProducts' => 'yes', //this toggles the related products on the product page

    'onlyShowFirstPrice' => 'no', //this only applies when the multi price is enabled. if set to 'yes' it will only show the first price from the array for the product on the index and shop page

    'creditCardIcons' => 4, // Icons set Pick between 1 - 4

    'loadingGif' => 3, // Preloader Animation sitewide. Select from 1 - 10

    'sortProducts' => 5, //1 - alphabetical, 2 - reverse alphabetical, 3 - lowest to highest price, 4 - highest to lowest price, 5 - first to last product array, 6 - last to first product, 7 - shortest product name to longest product name, 8 - longest product name to shortest product name

    'showNavigationCart' => 'yes', //yes displays it, no hides it

    'showBillingColumnCheckoutPage' => 'no', //yes displays it, no hides it

    'popularProducts' => [ //this toggles the popular products on the landing page
        'displaypopularProducts' => 'yes',
        'popularProducts' => 3
    ],

    'oneProductCartLimit' => 'no', //this limits one product in the shopping cart

    'shippingOption' => array(
        'enableShippingOption' => 'no', //enables shipping option to checkout page and add description to terms page
        'shippingOptionName' => 'Shipping Insurance', //name that will be displayed in the checkout and terms page
        'shippingOptionPrice' => '1.00',   //price of the shipping option
    ),



    //Terms
    'checkoutPage' => array(
        'require_generic_text_terms' => 'yes',   //if set to no, then disable checkout page product terms checkboxes
        'require_product_terms' => 'yes',   //if set to no, then disable checkout page product terms checkboxes
        'require_total_price_terms' => 'no'   //if set to no, then disable checkout page product terms checkboxes
    )
);

//Credit Card

$card_type = array(
    'visa' => 'yes', //yes or no
    'discover' => 'yes', //yes or no
    'master' => 'yes', //yes or no
);

//CRM settings
$CRM = [
    'url'                       => 'https://dcconsulting.sticky.io/api/v1/new_order',
    'username'                  => 'dc_consulting_bp',
    'password'                  => '6XYJvHVXUepd',
    'shippingId'                => 3,
    'campaignId'                => 262,
    'tranType'                  => 'Sale',
    'offerId'                   => 25,
    'billingModelId'            => 2,
    'gatewayId'                 => 959,

    //'shippingInsurancePrice'    => 1.00,
    //'shippingInsuranceProductId'=> 123
];

// all ajax and other css,images/js file path moved on this file => design_and_ajax.php
require 'design_and_ajax.php';

