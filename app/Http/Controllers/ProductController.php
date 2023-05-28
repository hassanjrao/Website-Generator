<?php

namespace App\Http\Controllers;

use App\Models\BillingModel;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->can('view products') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $products=Product::latest()->with(["productCategory","productShopOptions","sizes","billingModel"])->get();

        return view("products.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->can('create products') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $productCategories=ProductCategory::all();
        $billingModels=BillingModel::all();

        $product=null;

        return view("products.add_edit",compact("productCategories","product","billingModels"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(auth()->user()->can('create products') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }


        $request->validate([                     
            "product_category"=>"required|exists:product_categories,id",
            "name"=>"required|string",
            "sticky_id"=>"required|string",
            "description"=>"nullable|string",
            "show_ingrediants"=>"nullable",
            'billing_model'=>'required|exists:billing_models,id',
            "ss_price"=>"required|numeric",
            "ss_shipping"=>"required|numeric",
            "ss_max_quantity"=>"required|numeric",
            "trial_price"=>"required|numeric",
            "trial_shipping"=>"required|numeric",
            "trial_rebill_price"=>"required|numeric",
            "trial_max_quantity"=>"required|numeric",
            "continuity_price"=>"required|numeric",
            "continuity_shipping"=>"required|numeric",
            "continuity_max_quantity"=>"required|numeric",
            "straight_sale_multi_price"=>"nullable",
            "max_quantity_enable"=>"nullable",
            "size_option"=>"nullable",
            "image"=>"required|image",
            "ingrediants_image"=>"required|image",
            "active"=>"nullable",
        ]);



        if($request->hasFile("image")){
            $image= $request->file("image")->store("product/images");
        }

        if($request->hasFile("ingrediants_image")){
            $ingrediants_image= $request->file("ingrediants_image")->store("product/ingrediants_images");

        }


      $product=  Product::create([
            "product_category_id"=>$request->product_category,
            "name"=>$request->name,
            "sticky_id"=>$request->sticky_id,
            "description"=>$request->description,
            "show_ingredients"=>$request->show_ingrediants == "on" ? 1 : 0,
            "billing_model_id"=>$request->billing_model,
            "ss_price"=>$request->ss_price,
            "ss_shipping"=>$request->ss_shipping,
            "ss_max_quantity"=>$request->ss_max_quantity,
            "trial_price"=>$request->trial_price,
            "trial_shipping"=>$request->trial_shipping,
            "trial_rebill_price"=>$request->trial_rebill_price,
            "trial_max_quantity"=>$request->trial_max_quantity,
            "continuity_price"=>$request->continuity_price,
            "continuity_shipping"=>$request->continuity_shipping,
            "continuity_max_quantity"=>$request->continuity_max_quantity,
            "straight_sale_multi_price"=>$request->straight_sale_multi_price== "on" ? 1 : 0,
            "enable_max_quantity"=>$request->max_quantity_enable == "on" ? 1 : 0,
            "size_option"=>$request->size_option == "on" ? 1 : 0,
            "status"=>$request->active == "on" ? 1 : 0,
            "image"=>basename($image),
            "ingredients_image"=>basename($ingrediants_image),
        ]);





        return redirect()->route("products.index")->withToastSuccess("Product Created Successfully");

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
        if(auth()->user()->can('edit products') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $productCategories=ProductCategory::all();
        $billingModels=BillingModel::all();

        $product=Product::with(["productCategory","productShopOptions","sizes"])->findOrFail($id);

        return view("products.add_edit",compact("productCategories","product","billingModels"));
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

        if(auth()->user()->can('edit products') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $request->validate([
            "product_category"=>"required|exists:product_categories,id",
            "name"=>"required|string",
            "sticky_id"=>"required|string",
            "description"=>"nullable|string",
            "show_ingrediants"=>"nullable",
            'billing_model'=>'required|exists:billing_models,id',
            "ss_price"=>"required|numeric",
            "ss_shipping"=>"required|numeric",
            "ss_max_quantity"=>"required|numeric",
            "trial_price"=>"required|numeric",
            "trial_shipping"=>"required|numeric",
            "trial_rebill_price"=>"required|numeric",
            "trial_max_quantity"=>"required|numeric",
            "continuity_price"=>"required|numeric",
            "continuity_shipping"=>"required|numeric",
            "continuity_max_quantity"=>"required|numeric",
            "straight_sale_multi_price"=>"nullable",
            "max_quantity_enable"=>"nullable",
            "size_option"=>"nullable",
            "image"=>"nullable|image",
            "ingrediants_image"=>"nullable|image",
            "active"=>"nullable",
        ]);


        $product=Product::findOrFail($id);

        if($request->hasFile("image")){
            $image= $request->file("image")->store("product/images");
            $product->image=basename($image);

            $product->save();
        }

        if($request->hasFile("ingrediants_image")){
            $ingrediants_image= $request->file("ingrediants_image")->store("product/ingrediants_images");
            $product->ingredients_image=basename($ingrediants_image);

            $product->save();
        }


        $product->update([
            "product_category_id"=>$request->product_category,
            "name"=>$request->name,
            "sticky_id"=>$request->sticky_id,
            "description"=>$request->description,
            "show_ingredients"=>$request->show_ingrediants == "on" ? 1 : 0,
            "billing_model_id"=>$request->billing_model,
            "ss_price"=>$request->ss_price,
            "ss_shipping"=>$request->ss_shipping,
            "ss_max_quantity"=>$request->ss_max_quantity,
            "trial_price"=>$request->trial_price,
            "trial_shipping"=>$request->trial_shipping,
            "trial_rebill_price"=>$request->trial_rebill_price,
            "trial_max_quantity"=>$request->trial_max_quantity,
            "continuity_price"=>$request->continuity_price,
            "continuity_shipping"=>$request->continuity_shipping,
            "continuity_max_quantity"=>$request->continuity_max_quantity,
            "straight_sale_multi_price"=>$request->straight_sale_multi_price== "on" ? 1 : 0,
            "enable_max_quantity"=>$request->max_quantity_enable == "on" ? 1 : 0,
            "size_option"=>$request->size_option == "on" ? 1 : 0,
            "status"=>$request->active == "on" ? 1 : 0,

        ]);


        return redirect()->route("products.index")->withToastSuccess("Product Updated Successfully");



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->can('delete products') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $product=Product::findOrFail($id);

        $product->delete();

        return redirect()->route("products.index")->withToastSuccess("Product Deleted Successfully");
    }
}
