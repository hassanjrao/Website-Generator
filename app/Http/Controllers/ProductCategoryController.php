<?php

namespace App\Http\Controllers;

use App\Models\AdvertisingCompany;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()->can('view categories') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }


        $productCategories=ProductCategory::latest()->with(["advertisingCompany"])->get();

        return view("product-categories.index",compact("productCategories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(auth()->user()->can('create categories') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $productCategory=null;

        $advertisingCompanies=AdvertisingCompany::all();

        return view("product-categories.add_edit",compact("productCategory","advertisingCompanies"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(auth()->user()->can('create categories') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $request->validate([
            "advertising_company"=>"required|exists:advertising_companies,id",
            "name"=>"required|string",
        ]);

        ProductCategory::create([
            "advertising_company_id"=>$request->advertising_company,
            "name"=>$request->name,
        ]);

        return redirect()->route("product-categories.index")->withToastSuccess("Product Category Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(auth()->user()->can('edit categories') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $productCategory=ProductCategory::findOrFail($id);

        $advertisingCompanies=AdvertisingCompany::all();

        return view("product-categories.add_edit",compact("productCategory","advertisingCompanies"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if(auth()->user()->can('edit categories') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $request->validate([
            "advertising_company"=>"required|exists:advertising_companies,id",
            "name"=>"required|string",
        ]);

        $productCategory=ProductCategory::findOrFail($id);

        $productCategory->update([
            "advertising_company_id"=>$request->advertising_company,
            "name"=>$request->name,
        ]);

        return redirect()->route("product-categories.index")->withToastSuccess("Product Category Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if(auth()->user()->can('delete categories') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $productCategory=ProductCategory::findOrFail($id);

        $productCategory->delete();

        return redirect()->route("product-categories.index")->withToastSuccess("Product Category Deleted Successfully");
    }
}
