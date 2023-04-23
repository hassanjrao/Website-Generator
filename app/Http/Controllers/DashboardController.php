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
    public function index(){

        $sites=Site::all()->count();
        $users=User::all()->count();
        $products=Product::all()->count();
        $productCategories=ProductCategory::all()->count();
        $roles=Role::all()->count();


        return view('dashboard.index',compact('sites','users','products','productCategories','roles'));
    }
}
