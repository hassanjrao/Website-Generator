<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Role::firstOrCreate(["name" => "super admin"]);
        $admin = Role::firstOrCreate(["name" => "admin"]);


        // users management permissions
        Permission::firstOrCreate(["name" => "view users"]);
        Permission::firstOrCreate(["name" => "create users"]);
        Permission::firstOrCreate(["name" => "edit users"]);
        Permission::firstOrCreate(["name" => "delete users"]);

        // roles management permissions
        Permission::firstOrCreate(["name" => "view roles"]);
        Permission::firstOrCreate(["name" => "create roles"]);
        Permission::firstOrCreate(["name" => "edit roles"]);
        Permission::firstOrCreate(["name" => "delete roles"]);


        // sites management permissions
        Permission::firstOrCreate(["name" => "view sites"]);
        Permission::firstOrCreate(["name" => "create sites"]);
        Permission::firstOrCreate(["name" => "edit sites"]);
        Permission::firstOrCreate(["name" => "delete sites"]);


        // products management permissions
        Permission::firstOrCreate(["name" => "view products"]);
        Permission::firstOrCreate(["name" => "create products"]);
        Permission::firstOrCreate(["name" => "edit products"]);
        Permission::firstOrCreate(["name" => "delete products"]);

        // categories management permissions
        Permission::firstOrCreate(["name" => "view categories"]);
        Permission::firstOrCreate(["name" => "create categories"]);
        Permission::firstOrCreate(["name" => "edit categories"]);
        Permission::firstOrCreate(["name" => "delete categories"]);


        // advertising companies management permissions
        Permission::firstOrCreate(["name" => "view advertising companies"]);
        Permission::firstOrCreate(["name" => "create advertising companies"]);
        Permission::firstOrCreate(["name" => "edit advertising companies"]);
        Permission::firstOrCreate(["name" => "delete advertising companies"]);


        // assign permissions to roles

        // super admin
        $superAdmin->givePermissionTo("view users");
        $superAdmin->givePermissionTo("create users");
        $superAdmin->givePermissionTo("edit users");
        $superAdmin->givePermissionTo("delete users");

        $superAdmin->givePermissionTo("view roles");
        $superAdmin->givePermissionTo("create roles");
        $superAdmin->givePermissionTo("edit roles");
        $superAdmin->givePermissionTo("delete roles");

        $superAdmin->givePermissionTo("view sites");
        $superAdmin->givePermissionTo("create sites");
        $superAdmin->givePermissionTo("edit sites");
        $superAdmin->givePermissionTo("delete sites");

        $superAdmin->givePermissionTo("view products");
        $superAdmin->givePermissionTo("create products");
        $superAdmin->givePermissionTo("edit products");
        $superAdmin->givePermissionTo("delete products");

        $superAdmin->givePermissionTo("view categories");
        $superAdmin->givePermissionTo("create categories");
        $superAdmin->givePermissionTo("edit categories");
        $superAdmin->givePermissionTo("delete categories");

        $superAdmin->givePermissionTo("view advertising companies");
        $superAdmin->givePermissionTo("create advertising companies");
        $superAdmin->givePermissionTo("edit advertising companies");
        $superAdmin->givePermissionTo("delete advertising companies");


    }
}
