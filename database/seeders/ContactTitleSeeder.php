<?php

namespace Database\Seeders;

use App\Models\ContactTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactTitle = array(
            1 => 'How Can We Help?',
            2 => 'We\'re here for you!',
            3 => 'Don\'t Hesitate to Connect With Us',
            4 => 'Hi, there!',
            5 => 'Contact The Help Team',
            6 => 'Customer support team, standing by.',
            7 => 'Let\'s Talk, But You First.',
            8 => 'Hello there! Give us a ring',
            9 => 'We\'d love to hear from you',
            10 => 'Still need help?',
            11 => 'Oh hey there!',
            12 => 'Got a question for us?',
            13 => 'Contact Support',
            14 => 'Contact Customer Service',
            15 => 'Looking for help with..?',
            16 => 'Write Us A Message',
            17 => 'Need To Contact Us?',
            18 => 'Let\'s start a conversation',
            19 => 'Give us a shout',
            20 => 'Get the info you\'re looking for',
            21 => 'Reach Out to Us',
            22 => 'Ask Us a Question about Our Services',
            23 => 'Get in Touch with Our Customer Service',
            24 => 'Ask Us a Question via Email',
            25 => 'Send Us a Message via Phone',
            26 => 'Contact Our Management Team',
            27 => 'Connect with Us on Social Media',
            28 => 'Get in Touch with Our Support Team',
            29 => 'Give Us a Call',
            30 => 'Send Us an Email',
            31 => 'Connect with Our Team',
            32 => 'Contact Our Team',
            33 => 'Get in Contact',
            34 => 'Ask Us a Question',
            35 => 'Send Us a Message',
            36 => 'Say Hello',
            37 => 'Reach Out',
            38 => 'Connect with Us',
            39 => 'Get in Touch',
            40 => 'Contact Us'
        );

        $contactTitleArr=[];

        foreach ($contactTitle as $key => $value) {
            $contactTitleArr[] = [
                'title' => $value,
                'created_at' => now(),
                'updated_at' => now(),
                "created_by" => "1",
                "updated_by" => "1"
            ];
        }

        ContactTitle::insert($contactTitleArr);
    }
}
