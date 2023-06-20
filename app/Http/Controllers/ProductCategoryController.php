<?php

namespace App\Http\Controllers;

use App\Models\AdvertisingCompany;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductShopOption;
use App\Models\ProductSize;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (auth()->user()->can('view categories') == false) {
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }


        $productCategories = ProductCategory::latest()->with(["advertisingCompany","products"])->get();

        $advertisingCompanies = AdvertisingCompany::all();

        return view("product-categories.index", compact("productCategories", "advertisingCompanies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (auth()->user()->can('create categories') == false) {
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $productCategory = null;

        $advertisingCompanies = AdvertisingCompany::all();

        return view("product-categories.add_edit", compact("productCategory", "advertisingCompanies"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (auth()->user()->can('create categories') == false) {
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $request->validate([
            "advertising_company" => "required|exists:advertising_companies,id",
            "name" => "required|string",
        ]);


        ProductCategory::create([
            "advertising_company_id" => $request->advertising_company,
            "name" => $request->name,
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

        if (auth()->user()->can('edit categories') == false) {
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $productCategory = ProductCategory::findOrFail($id);

        $advertisingCompanies = AdvertisingCompany::all();

        return view("product-categories.add_edit", compact("productCategory", "advertisingCompanies"));
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

        if (auth()->user()->can('edit categories') == false) {
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $request->validate([
            "advertising_company" => "required|exists:advertising_companies,id",
            "name" => "required|string",
        ]);

        $productCategory = ProductCategory::findOrFail($id);


        $products_array_string = trim($request->products_array);

        try {
            $productsArray = eval("return $products_array_string;");

        } catch (\ParseError $e) {
            return redirect()->back()->withToastError("Invalid Products Array, Please check the array format");
        }

        $productCategory->update([
            "advertising_company_id" => $request->advertising_company,
            "name" => $request->name,
            "products_array" => $products_array_string,
        ]);

        $productCategory->products()->delete();

        $productShopOptions = [];
        $productSizes = [];

        $sizes=Size::all();

        foreach ($productsArray as $product) {
            $cproduct = [
                "product_category_id" => $productCategory->id,
                "sticky_id" => $product["stickyId"],
                "name" => $product["name"],
                "description" => $product["description"],
                "show_ingredients" => $product["show_ingredients"] == "yes" ? 1 : 0,
                "billing_model_id" => $product["billingModel"],
                "ss_price" => $product["ssPrice"],
                "ss_shipping" => $product["ssShipping"],
                "ss_max_quantity" => $product["ssMaxqty"],
                "trial_price" => $product["trialPrice"],
                "trial_shipping" => $product["trialShipping"],
                "trial_rebill_price" => $product["trialRebillPrice"],
                "trial_max_quantity" => $product["trialMaxqty"],
                "continuity_price" => $product["continuityPrice"],
                "continuity_shipping" => $product["continuityShipping"],
                "continuity_max_quantity" => $product["continuityMaxqty"],
                "straight_sale_multi_price" => $product["straightSaleMultiPrice"] == "yes" ? 1 : 0,
                "enable_max_quantity" => $product["enableMaxqty"],
                "size_option" => $product["sizeOption"] == "yes" ? 1 : 0,
                "status" => $product["status"] == "active" ? 1 : 0,
            ];

            $createdProduct = Product::create($cproduct);


            ProductShopOption::where("product_id", $createdProduct->id)->delete();

            foreach ($product["shop_option"] as $ind => $shopOption) {

                $productShopOptions[] = [
                    "product_id" => $createdProduct->id,
                    "option_quantity" => $shopOption["option_quantity"],
                    "option_price" => $shopOption["option_price"],
                ];
            }

            $createdProduct->sizes()->delete();

            foreach($product["size_option"] as $size){
                $productSizes[]=[
                    "product_id"=>$createdProduct->id,
                    "size_id"=>$sizes->where("name",$size)->first()->id,
                ];
            }


        }

        ProductShopOption::insert($productShopOptions);

        DB::table('product_size')->insert($productSizes);






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

        if (auth()->user()->can('delete categories') == false) {
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $productCategory = ProductCategory::findOrFail($id);

        $productCategory->delete();

        return redirect()->route("product-categories.index")->withToastSuccess("Product Category Deleted Successfully");
    }
}
