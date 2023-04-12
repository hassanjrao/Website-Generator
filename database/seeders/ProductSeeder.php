<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = array(
            //Product Array - paste under this line

            array(
            
                'sticky_id' => 232,
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
                'show_ingredients' => 1,
                'ingredients_image' => 'ingredients/keto.jpg',
                'product_category_id' => '1',
                'billing_model' => '5',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
                'ss_price' => '91.95',               //if ss
                'ss_shipping' => '0.00',             //if ss
                'ss_max_quantity' => '1',                  // 1 for disable qty, 2 for enable qty
                'trial_price' => '0.00',             //if trial
                'trial_shipping' => '5.45',          //if trial
                'trial_rebill_Price' => '91.95',       //Rebill price - if trial(after 14 days)
                'trial_max_quantity' => '1',               // 1 for disable qty, 2 for enable qty
                'continuity_price' => '91.95',       //if continuity
                'continuity_shipping' => '3.95',     //if continuity
                'continuity_max_quantity' => '10',          // 1 for disable qty, 2 for enable qty
                'straight_sale_multi_price' => 1,  // if yes, only then it take price from below

                'enable_max_quantity' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
                'size_option' => 1,              //if yes then how size options in product page

                'status' => '1',               //1 or in1
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
            
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
                'show_ingredients' => 1,
                'ingredients_image' => 'ingredients/keto.jpg',
                'product_category_id' => '1',
                'billingModel' => '5',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
                'ss_price' => '91.95',               //if ss
                'ss_shipping' => '0.00',             //if ss
                'ss_max_quantity' => '1',                  // 1 for disable qty, 2 for enable qty
                'trial_price' => '0.00',             //if trial
                'trial_shipping' => '5.45',          //if trial
                'trial_rebill_Price' => '91.95',       //Rebill price - if trial(after 14 days)
                'trial_max_quantity' => '1',               // 1 for disable qty, 2 for enable qty
                'continuity_price' => '91.95',       //if continuity
                'continuity_shipping' => '3.95',     //if continuity
                'continuity_max_quantity' => '10',          // 1 for disable qty, 2 for enable qty
                'straight_sale_multi_price' => 1,  // if yes, only then it take price from below

                'enable_max_quantity' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
                'size_option' => 1,              //if yes then how size options in product page

                'status' => '1',               //1 or in1
                'created_at' => now(),
                'updated_at' => now(),
            ),

            //End of Product Array
        );


        Product::insert($products);
    }
}
