<?php

namespace App\Http\Controllers;

use App\Models\ProductPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPageController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view product pages')) {
            return abort(403, "You don't have permission to access this page");
        }

        $productPages = ProductPage::latest()->get();

        return view("product-pages.index", compact("productPages"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create product pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $productPage = null;

        return view("product-pages.add_edit", compact("productPage"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create product pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate(
            [
                "name" => "required",
                "file" => "required|file"
            ]
        );

        $fileName = "product_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("pages/products", $fileName);

        ProductPage::create(
            [
                "name" => $request->name,
                "file" => $filePath
            ]
        );

        return redirect()->route("product-pages.index")->withToastSuccess("Product Page Created Successfully");
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
        if (!auth()->user()->can('edit product pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $productPage = ProductPage::findOrFail($id);

        return view("product-pages.add_edit", compact("productPage"));
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
        if (!auth()->user()->can('edit product pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "name" => "required",
            "file" => "nullable|file",
        ]);

        $productPage = ProductPage::findOrFail($id);
        if ($request->hasFile("file")) {

            if ($productPage->file) {
                Storage::delete($productPage->file);
            }

            $fileName = "product_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("pages/products", $fileName);

            $productPage->update([
                "file" => $filePath
            ]);
        }

        $productPage->update([
            "name" => $request->name
        ]);

        return redirect()->route("product-pages.index")->withToastSuccess("Product Page Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete product pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $productPage = ProductPage::findOrFail($id);

        if ($productPage->file) {
            Storage::delete($productPage->file);
        }

        $productPage->delete();

        return redirect()->route("product-pages.index")->withToastSuccess("Product Page Deleted Successfully");
    }
}
