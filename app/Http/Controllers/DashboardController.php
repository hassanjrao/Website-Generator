<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {


        if (auth()->user()->can('view sites')) {
            $sites = Site::all()->count();
        } else {
            $sites = 0;
        }

        if (auth()->user()->can('view users')) {

            $users = User::all()->count();
        } else {
            $users = 0;
        }

        if (auth()->user()->can('view products')) {

            $products = Product::all()->count();
        } else {
            $products = 0;
        }

        if (auth()->user()->can('view categories')) {

            $productCategories = ProductCategory::all()->count();
        } else {
            $productCategories = 0;
        }


        if (auth()->user()->can('view roles')) {


            $roles = Role::all()->count();
        } else {
            $roles = 0;
        }






        return view('dashboard.index', compact('sites', 'users', 'products', 'productCategories', 'roles'));
    }
}
