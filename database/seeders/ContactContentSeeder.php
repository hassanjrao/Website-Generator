<?php

namespace Database\Seeders;

use App\Models\ContactContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactContent = array(
            1 => 'For all enquiries, please don\'t hesitate to contact us.',
            2 => 'Need something? We\'re here to help!',
            3 => 'Don\'t be shy, ask away!',
            4 => 'We have a friendly customer support team that\'s always just a click away.',
            5 => 'If you have any questions or queries, a member of our staff will always be happy to help.',
            6 => 'Feel free to contact us by telephone or email and we will be sure to get back to you as soon as possible.',
            7 => 'We love to hear from our amazing customers!',
            8 => 'Always humans, never bots. The hands-down, sharpest and friendliest support team in the business.',
            9 => 'Looking for a quick answer to your question? We\'re here for you',
            10 => 'Need a hand? Here\'s how to reach us.',
            11 => 'Request a call, chat online and more.',
            12 => 'Talk to a member of our customer support team.',
            13 => 'Question not answered yet? We\'re here to help',
            14 => 'Let\'s talk about your concern.',
            15 => 'Send us a message and we will be in touch with you.',
            16 => 'Still need help? How would you like us to get in touch?',
            17 => 'Tell us about your issue so we can help you more quickly',
            18 => 'We\'ve got all kinds of ways to help you out. Here\'s how you can contact us.',
            19 => 'If you\'re looking at this page, you\'re in what we call "you do need help" stage and we got you!',
            20 => 'Our door is always open to help you out, or you can just share your excitement with us.',
            21 => 'Whether you\'re curious about our service, products etc - we\'re ready to answer any and all questions',
            22 => 'Want to get in touch? We\'d love to hear from you. Here\'s how you can reach us...',
            23 => 'We\'re here to help and answer any question you might have. We look forward to hearing from you',
            24 => 'Drop us a line, give us a heads up if you\'re interested in sharing what you have in mind.',
            25 => 'Are you a customer who needs help? Our amazing customer support team is here for you!',
            26 => 'Let\'s get this conversation started. Tell us what you have in mind and we\'ll get in touch as soon as we can.',
            27 => 'We appreciate you here in our business. How can we help you today?',
            28 => 'If you have any questions, please feel free to let us know.',
            29 => 'We\'re always here, ready and waiting to answer your questions.',
            30 => 'Thanks for reaching out. What questions do you need help with?',
            31 => 'Here in our store, we are dedicated in making you have an amazing online shopping experience.',
            32 => 'Didn\'t find what you\'re looking for? We\'d love to hear from you.',
            33 => 'Questions? Concerns? Drop us your details to receive a call back from us.',
            34 => 'Got questions? Want to tell us something? Looking for a service or a product?',
            35 => 'Need to get in touch with the team? We\'re all ears.',
            36 => 'Our team is happy to answer all your questions.',
            37 => 'What can we help you with?',
            38 => 'We see that you have some questions, let us help you with that.',
            39 => 'Please let us know your concern, and we\'ll be in touch with you shortly',
            40 => 'Want to find the answer to your particular problem or concern? Let\'s talk',
            41 => 'We\'re here for you and we\'re wearing our "always ready to help" hats.',
            42 => 'Let\'s have a chat and talk about your question.',
            43 => 'Need to get in contact or just want to send a message?',
            44 => 'Thanks for visiting! We hope that you have found what you needed in our website. If not, please feel free to contact us.',
            45 => 'Got a question that you can\'t seem to figure out? We\'d love to hear from you!',
            46 => 'If you have questions or feedback about an order, here\'s how to get in touch.',
            47 => 'We provide the exceptional service we\'d want to experince ourselves.',
            48 => 'You can contact us online, visit or give us a call.',
            49 => 'We will help you get in touch with the right people!',
            50 => 'You are always welcome to contact us with questions and inquiries.',
            51 => 'Thank you for visiting our website. If you have any questions or comments, please don\'t hesitate to contact us. We\'d love to hear from you!',
            52 => 'We value your feedback and are always happy to help with any questions or concerns you may have. Please don\'t hesitate to contact us at any time.',
            53 => 'For inquiries, comments, or support, please don\'t hesitate to get in touch with us. We\'re always happy to help and look forward to hearing from you.',
            54 => 'Need help with your order, have a question about our products, or just want to say hello? Contact us anytime and we\'ll be happy to assist you.',
            55 => 'We\'re here to help with any questions or issues you may have. Please don\'t hesitate to reach out to us through our contact form, email, or phone.',
            56 => 'Thank you for considering our products and services. If you have any questions or need assistance, please don\'t hesitate to contact us.',
            57 => 'We\'re always happy to answer any questions or concerns you may have. Please don\'t hesitate to get in touch with us through our contact form or by phone.',
            58 => 'For any inquiries or support, please don\'t hesitate to contact us. We\'ll do our best to respond to your message as soon as possible.',
            59 => 'If you have any questions or comments, we\'d love to hear from you. Please don\'t hesitate to get in touch with us through our contact form, email, or phone.',
            60 => 'We\'re here to help with any issues or questions you may have. Please don\'t hesitate to contact us and we\'ll do our best to assist you.',
            61 => 'Thank you for visiting our website. If you have any questions or need assistance, please don\'t hesitate to reach out to us.',
            62 => 'We value your feedback and are always happy to help with any questions or concerns you may have.',
            63 => 'For inquiries, comments, or support, please don\'t hesitate to contact us. We\'re here to help and look forward to hearing from you.',
            64 => 'Thank you for reaching out to us! If you have any questions, comments, or concerns, please don\'t hesitate to contact us. We\'ll do our best to get back to you as soon as possible.',
            65 => 'We value your feedback and are here to help with any questions or issues you may have. Please don\'t hesitate to get in touch with us through the contact form provided.',
            66 => 'If you have any questions or concerns, we\'d love to hear from you. Please use the contact form on our website or send us an email, and we\'ll get back to you as soon as we can.',
            67 => 'We\'re always happy to hear from our customers! If you have any questions, comments, or suggestions, please don\'t hesitate to reach out to us. We\'ll do our best to respond to your inquiry as quickly as possible',
            68 => 'Your feedback is important to us. If you have any questions, comments, or suggestions, please don\'t hesitate to reach out to us through the contact form on our website or by email. We\'ll do our best to get back to you as soon as we can.',
            69 => 'Thank you for taking the time to contact us. If you have any questions, concerns, or comments, please don\'t hesitate to reach out. We\'ll do our best to get back to you as soon as we can.',
            70 => 'We\'re here to help! If you have any questions or need assistance with anything, please don\'t hesitate to contact us. We\'ll do our best to get back to you as soon as possible.'
        );

        $contactContentArr=[];

        foreach ($contactContent as $key => $value) {
            $contactContentArr[] = [
                'description' => $value,
                "created_at" => now(),
                "updated_at" => now(),
                "created_by" => 1,
                "updated_by" => 1,
            ];
        }

        ContactContent::insert($contactContentArr);
    }
}
