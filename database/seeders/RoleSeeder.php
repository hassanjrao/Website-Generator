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
        $owner=Role::firstOrCreate(["name"=>"owner"]);


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


        // product pages manangement permissions
        Permission::firstOrCreate(["name" => "view product pages"]);
        Permission::firstOrCreate(["name" => "create product pages"]);
        Permission::firstOrCreate(["name" => "edit product pages"]);
        Permission::firstOrCreate(["name" => "delete product pages"]);

        // checkout pages manangement permissions
        Permission::firstOrCreate(["name" => "view checkout pages"]);
        Permission::firstOrCreate(["name" => "create checkout pages"]);
        Permission::firstOrCreate(["name" => "edit checkout pages"]);
        Permission::firstOrCreate(["name" => "delete checkout pages"]);


        // slogans manangement permissions
        Permission::firstOrCreate(["name" => "view slogans"]);
        Permission::firstOrCreate(["name" => "create slogans"]);
        Permission::firstOrCreate(["name" => "edit slogans"]);
        Permission::firstOrCreate(["name" => "delete slogans"]);

        // taglines manangement permissions
        Permission::firstOrCreate(["name" => "view taglines"]);
        Permission::firstOrCreate(["name" => "create taglines"]);
        Permission::firstOrCreate(["name" => "edit taglines"]);
        Permission::firstOrCreate(["name" => "delete taglines"]);

        // aboutus titles manangement permissions
        Permission::firstOrCreate(["name" => "view aboutus titles"]);
        Permission::firstOrCreate(["name" => "create aboutus titles"]);
        Permission::firstOrCreate(["name" => "edit aboutus titles"]);
        Permission::firstOrCreate(["name" => "delete aboutus titles"]);

        // aboutus descriptions manangement permissions
        Permission::firstOrCreate(["name" => "view aboutus descriptions"]);
        Permission::firstOrCreate(["name" => "create aboutus descriptions"]);
        Permission::firstOrCreate(["name" => "edit aboutus descriptions"]);
        Permission::firstOrCreate(["name" => "delete aboutus descriptions"]);

        // shop titles manangement permissions
        Permission::firstOrCreate(["name" => "view shop titles"]);
        Permission::firstOrCreate(["name" => "create shop titles"]);
        Permission::firstOrCreate(["name" => "edit shop titles"]);
        Permission::firstOrCreate(["name" => "delete shop titles"]);

        // button titles manangement permissions
        Permission::firstOrCreate(["name" => "view button titles"]);
        Permission::firstOrCreate(["name" => "create button titles"]);
        Permission::firstOrCreate(["name" => "edit button titles"]);
        Permission::firstOrCreate(["name" => "delete button titles"]);

        // popular titles manangement permissions
        Permission::firstOrCreate(["name" => "view popular titles"]);
        Permission::firstOrCreate(["name" => "create popular titles"]);
        Permission::firstOrCreate(["name" => "edit popular titles"]);
        Permission::firstOrCreate(["name" => "delete popular titles"]);

        // contact titles manangement permissions
        Permission::firstOrCreate(["name" => "view contact titles"]);
        Permission::firstOrCreate(["name" => "create contact titles"]);
        Permission::firstOrCreate(["name" => "edit contact titles"]);
        Permission::firstOrCreate(["name" => "delete contact titles"]);

        // contact descriptions manangement permissions
        Permission::firstOrCreate(["name" => "view contact descriptions"]);
        Permission::firstOrCreate(["name" => "create contact descriptions"]);
        Permission::firstOrCreate(["name" => "edit contact descriptions"]);
        Permission::firstOrCreate(["name" => "delete contact descriptions"]);




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

        $superAdmin->givePermissionTo("view product pages");
        $superAdmin->givePermissionTo("create product pages");
        $superAdmin->givePermissionTo("edit product pages");
        $superAdmin->givePermissionTo("delete product pages");

        $superAdmin->givePermissionTo("view checkout pages");
        $superAdmin->givePermissionTo("create checkout pages");
        $superAdmin->givePermissionTo("edit checkout pages");
        $superAdmin->givePermissionTo("delete checkout pages");


        $superAdmin->givePermissionTo("view slogans");
        $superAdmin->givePermissionTo("create slogans");
        $superAdmin->givePermissionTo("edit slogans");
        $superAdmin->givePermissionTo("delete slogans");

        $superAdmin->givePermissionTo("view taglines");
        $superAdmin->givePermissionTo("create taglines");
        $superAdmin->givePermissionTo("edit taglines");
        $superAdmin->givePermissionTo("delete taglines");

        $superAdmin->givePermissionTo("view aboutus titles");
        $superAdmin->givePermissionTo("create aboutus titles");
        $superAdmin->givePermissionTo("edit aboutus titles");
        $superAdmin->givePermissionTo("delete aboutus titles");

        $superAdmin->givePermissionTo("view aboutus descriptions");
        $superAdmin->givePermissionTo("create aboutus descriptions");
        $superAdmin->givePermissionTo("edit aboutus descriptions");
        $superAdmin->givePermissionTo("delete aboutus descriptions");

        $superAdmin->givePermissionTo("view shop titles");
        $superAdmin->givePermissionTo("create shop titles");
        $superAdmin->givePermissionTo("edit shop titles");
        $superAdmin->givePermissionTo("delete shop titles");

        $superAdmin->givePermissionTo("view button titles");
        $superAdmin->givePermissionTo("create button titles");
        $superAdmin->givePermissionTo("edit button titles");
        $superAdmin->givePermissionTo("delete button titles");

        $superAdmin->givePermissionTo("view popular titles");
        $superAdmin->givePermissionTo("create popular titles");
        $superAdmin->givePermissionTo("edit popular titles");
        $superAdmin->givePermissionTo("delete popular titles");

        $superAdmin->givePermissionTo("view contact titles");
        $superAdmin->givePermissionTo("create contact titles");
        $superAdmin->givePermissionTo("edit contact titles");
        $superAdmin->givePermissionTo("delete contact titles");



        $superAdmin->givePermissionTo("view contact descriptions");
        $superAdmin->givePermissionTo("create contact descriptions");
        $superAdmin->givePermissionTo("edit contact descriptions");
        $superAdmin->givePermissionTo("delete contact descriptions");




        // assign permissions to owner

        // super admin
        $owner->givePermissionTo("view users");
        $owner->givePermissionTo("create users");
        $owner->givePermissionTo("edit users");
        $owner->givePermissionTo("delete users");

        $owner->givePermissionTo("view roles");
        $owner->givePermissionTo("create roles");
        $owner->givePermissionTo("edit roles");
        $owner->givePermissionTo("delete roles");

        $owner->givePermissionTo("view sites");
        $owner->givePermissionTo("create sites");
        $owner->givePermissionTo("edit sites");
        $owner->givePermissionTo("delete sites");

        $owner->givePermissionTo("view products");
        $owner->givePermissionTo("create products");
        $owner->givePermissionTo("edit products");
        $owner->givePermissionTo("delete products");

        $owner->givePermissionTo("view categories");
        $owner->givePermissionTo("create categories");
        $owner->givePermissionTo("edit categories");
        $owner->givePermissionTo("delete categories");

        $owner->givePermissionTo("view advertising companies");
        $owner->givePermissionTo("create advertising companies");
        $owner->givePermissionTo("edit advertising companies");
        $owner->givePermissionTo("delete advertising companies");

        $owner->givePermissionTo("view headers");
        $owner->givePermissionTo("create headers");
        $owner->givePermissionTo("edit headers");
        $owner->givePermissionTo("delete headers");

        $owner->givePermissionTo("view footers");
        $owner->givePermissionTo("create footers");
        $owner->givePermissionTo("edit footers");
        $owner->givePermissionTo("delete footers");

        $owner->givePermissionTo("view hero sections");
        $owner->givePermissionTo("create hero sections");
        $owner->givePermissionTo("edit hero sections");
        $owner->givePermissionTo("delete hero sections");

        $owner->givePermissionTo("view about sections");
        $owner->givePermissionTo("create about sections");
        $owner->givePermissionTo("edit about sections");
        $owner->givePermissionTo("delete about sections");

        $owner->givePermissionTo("view product sections");
        $owner->givePermissionTo("create product sections");
        $owner->givePermissionTo("edit product sections");
        $owner->givePermissionTo("delete product sections");

        $owner->givePermissionTo("view related product sections");
        $owner->givePermissionTo("create related product sections");
        $owner->givePermissionTo("edit related product sections");
        $owner->givePermissionTo("delete related product sections");

        $owner->givePermissionTo("view popular product sections");
        $owner->givePermissionTo("create popular product sections");
        $owner->givePermissionTo("edit popular product sections");
        $owner->givePermissionTo("delete popular product sections");

        $owner->givePermissionTo("view cta sections");
        $owner->givePermissionTo("create cta sections");
        $owner->givePermissionTo("edit cta sections");
        $owner->givePermissionTo("delete cta sections");

        $owner->givePermissionTo("view contact sections");
        $owner->givePermissionTo("create contact sections");
        $owner->givePermissionTo("edit contact sections");
        $owner->givePermissionTo("delete contact sections");

        $owner->givePermissionTo("view feature sections");
        $owner->givePermissionTo("create feature sections");
        $owner->givePermissionTo("edit feature sections");
        $owner->givePermissionTo("delete feature sections");

        $owner->givePermissionTo("view product pages");
        $owner->givePermissionTo("create product pages");
        $owner->givePermissionTo("edit product pages");
        $owner->givePermissionTo("delete product pages");

        $owner->givePermissionTo("view checkout pages");
        $owner->givePermissionTo("create checkout pages");
        $owner->givePermissionTo("edit checkout pages");
        $owner->givePermissionTo("delete checkout pages");


        $owner->givePermissionTo("view slogans");
        $owner->givePermissionTo("create slogans");
        $owner->givePermissionTo("edit slogans");
        $owner->givePermissionTo("delete slogans");

        $owner->givePermissionTo("view taglines");
        $owner->givePermissionTo("create taglines");
        $owner->givePermissionTo("edit taglines");
        $owner->givePermissionTo("delete taglines");

        $owner->givePermissionTo("view aboutus titles");
        $owner->givePermissionTo("create aboutus titles");
        $owner->givePermissionTo("edit aboutus titles");
        $owner->givePermissionTo("delete aboutus titles");

        $owner->givePermissionTo("view aboutus descriptions");
        $owner->givePermissionTo("create aboutus descriptions");
        $owner->givePermissionTo("edit aboutus descriptions");
        $owner->givePermissionTo("delete aboutus descriptions");

        $owner->givePermissionTo("view shop titles");
        $owner->givePermissionTo("create shop titles");
        $owner->givePermissionTo("edit shop titles");
        $owner->givePermissionTo("delete shop titles");

        $owner->givePermissionTo("view button titles");
        $owner->givePermissionTo("create button titles");
        $owner->givePermissionTo("edit button titles");
        $owner->givePermissionTo("delete button titles");

        $owner->givePermissionTo("view popular titles");
        $owner->givePermissionTo("create popular titles");
        $owner->givePermissionTo("edit popular titles");
        $owner->givePermissionTo("delete popular titles");

        $owner->givePermissionTo("view contact titles");
        $owner->givePermissionTo("create contact titles");
        $owner->givePermissionTo("edit contact titles");
        $owner->givePermissionTo("delete contact titles");



        $owner->givePermissionTo("view contact descriptions");
        $owner->givePermissionTo("create contact descriptions");
        $owner->givePermissionTo("edit contact descriptions");
        $owner->givePermissionTo("delete contact descriptions");



    }
}
