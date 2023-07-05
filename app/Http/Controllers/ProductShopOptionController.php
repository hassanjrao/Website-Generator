<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductShopOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductShopOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (!auth()->user()->can('view product sections')) {
        //     return abort(403, "You don't have permission to access this page");
        // }

        $shopOptions = ProductShopOption::latest()->with(["product"])->get();

        return view("shop-options.index", compact("shopOptions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (!auth()->user()->can('create product sections')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $shopOption = null;
        $products = Product::all();

        return view("shop-options.add_edit", compact("shopOption", "products"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (!auth()->user()->can('create product sections')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $request->validate(
            [
                "product" => "required",
                "option_quantity" => "required|numeric",
                "option_price" => "required|numeric",
            ]
        );

        ProductShopOption::create(
            [
                "product_id" => $request->product,
                "option_quantity" => $request->option_quantity,
                "option_price" => $request->option_price,
            ]
        );

        return redirect()->route("shop-options.index")->withToastSuccess("Shop Option Created Successfully");
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
        // if (!auth()->user()->can('edit product sections')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $shopOption = ProductShopOption::findOrFail($id);
        $products = Product::all();

        return view("shop-options.add_edit", compact("shopOption", "products"));
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
        // if (!auth()->user()->can('edit product sections')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $request->validate([

            "product" => "required",
            "option_quantity" => "required|numeric",
            "option_price" => "required|numeric",

        ]);

        $productShopOption = ProductShopOption::findOrFail($id);

        $productShopOption->update(
            [
                "product_id" => $request->product,
                "option_quantity" => $request->option_quantity,
                "option_price" => $request->option_price,
            ]
        );

        return redirect()->route("shop-options.index")->withToastSuccess("Shop Option Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (!auth()->user()->can('delete product sections')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $productShopOption = ProductShopOption::findOrFail($id);


        $productShopOption->delete();

        return redirect()->route("shop-options.index")->withToastSuccess("Shop Option Deleted Successfully");
    }
}
