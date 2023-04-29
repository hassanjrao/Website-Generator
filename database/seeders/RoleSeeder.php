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


        // headers manangement permissions
        Permission::firstOrCreate(["name" => "view headers"]);
        Permission::firstOrCreate(["name" => "create headers"]);
        Permission::firstOrCreate(["name" => "edit headers"]);
        Permission::firstOrCreate(["name" => "delete headers"]);

        // footers manangement permissions
        Permission::firstOrCreate(["name" => "view footers"]);
        Permission::firstOrCreate(["name" => "create footers"]);
        Permission::firstOrCreate(["name" => "edit footers"]);
        Permission::firstOrCreate(["name" => "delete footers"]);

        // hero sections manangement permissions
        Permission::firstOrCreate(["name" => "view hero sections"]);
        Permission::firstOrCreate(["name" => "create hero sections"]);
        Permission::firstOrCreate(["name" => "edit hero sections"]);
        Permission::firstOrCreate(["name" => "delete hero sections"]);

        // about sections manangement permissions
        Permission::firstOrCreate(["name" => "view about sections"]);
        Permission::firstOrCreate(["name" => "create about sections"]);
        Permission::firstOrCreate(["name" => "edit about sections"]);
        Permission::firstOrCreate(["name" => "delete about sections"]);

        // product sections manangement permissions
        Permission::firstOrCreate(["name" => "view product sections"]);
        Permission::firstOrCreate(["name" => "create product sections"]);
        Permission::firstOrCreate(["name" => "edit product sections"]);
        Permission::firstOrCreate(["name" => "delete product sections"]);

        // related products sections manangement permissions
        Permission::firstOrCreate(["name" => "view related product sections"]);
        Permission::firstOrCreate(["name" => "create related product sections"]);
        Permission::firstOrCreate(["name" => "edit related product sections"]);
        Permission::firstOrCreate(["name" => "delete related product sections"]);

        // popular products sections manangement permissions
        Permission::firstOrCreate(["name" => "view popular product sections"]);
        Permission::firstOrCreate(["name" => "create popular product sections"]);
        Permission::firstOrCreate(["name" => "edit popular product sections"]);
        Permission::firstOrCreate(["name" => "delete popular product sections"]);

        // cta sections manangement permissions
        Permission::firstOrCreate(["name" => "view cta sections"]);
        Permission::firstOrCreate(["name" => "create cta sections"]);
        Permission::firstOrCreate(["name" => "edit cta sections"]);
        Permission::firstOrCreate(["name" => "delete cta sections"]);

        // contact sections manangement permissions
        Permission::firstOrCreate(["name" => "view contact sections"]);
        Permission::firstOrCreate(["name" => "create contact sections"]);
        Permission::firstOrCreate(["name" => "edit contact sections"]);
        Permission::firstOrCreate(["name" => "delete contact sections"]);

        // features sections manangement permissions
        Permission::firstOrCreate(["name" => "view feature sections"]);
        Permission::firstOrCreate(["name" => "create feature sections"]);
        Permission::firstOrCreate(["name" => "edit feature sections"]);
        Permission::firstOrCreate(["name" => "delete feature sections"]);


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

        $superAdmin->givePermissionTo("view headers");
        $superAdmin->givePermissionTo("create headers");
        $superAdmin->givePermissionTo("edit headers");
        $superAdmin->givePermissionTo("delete headers");

        $superAdmin->givePermissionTo("view footers");
        $superAdmin->givePermissionTo("create footers");
        $superAdmin->givePermissionTo("edit footers");
        $superAdmin->givePermissionTo("delete footers");

        $superAdmin->givePermissionTo("view hero sections");
        $superAdmin->givePermissionTo("create hero sections");
        $superAdmin->givePermissionTo("edit hero sections");
        $superAdmin->givePermissionTo("delete hero sections");

        $superAdmin->givePermissionTo("view about sections");
        $superAdmin->givePermissionTo("create about sections");
        $superAdmin->givePermissionTo("edit about sections");
        $superAdmin->givePermissionTo("delete about sections");

        $superAdmin->givePermissionTo("view product sections");
        $superAdmin->givePermissionTo("create product sections");
        $superAdmin->givePermissionTo("edit product sections");
        $superAdmin->givePermissionTo("delete product sections");

        $superAdmin->givePermissionTo("view related product sections");
        $superAdmin->givePermissionTo("create related product sections");
        $superAdmin->givePermissionTo("edit related product sections");
        $superAdmin->givePermissionTo("delete related product sections");

        $superAdmin->givePermissionTo("view popular product sections");
        $superAdmin->givePermissionTo("create popular product sections");
        $superAdmin->givePermissionTo("edit popular product sections");
        $superAdmin->givePermissionTo("delete popular product sections");

        $superAdmin->givePermissionTo("view cta sections");
        $superAdmin->givePermissionTo("create cta sections");
        $superAdmin->givePermissionTo("edit cta sections");
        $superAdmin->givePermissionTo("delete cta sections");

        $superAdmin->givePermissionTo("view contact sections");
        $superAdmin->givePermissionTo("create contact sections");
        $superAdmin->givePermissionTo("edit contact sections");
        $superAdmin->givePermissionTo("delete contact sections");

        $superAdmin->givePermissionTo("view feature sections");
        $superAdmin->givePermissionTo("create feature sections");
        $superAdmin->givePermissionTo("edit feature sections");
        $superAdmin->givePermissionTo("delete feature sections");

        




    }
}
