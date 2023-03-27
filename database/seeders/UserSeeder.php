<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            "name" => "Super Admin",
            "email" => "supadmin@m.com",
            "password"=> bcrypt("password"),
        ])->assignRole("super admin");

        User::firstOrCreate([
            "name" => "Admin",
            "email" => "admin@m.com",
            "password"=> bcrypt("password"),
        ])->assignRole("admin");

    }
}
