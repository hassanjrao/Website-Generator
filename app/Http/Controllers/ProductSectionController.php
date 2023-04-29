<?php

namespace App\Http\Controllers;

use App\Models\ProductSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view product sections')) {
            return abort(403, "You don't have permission to access this page");
        }

        $productSections = ProductSection::latest()->get();

        return view("product-sections.index", compact("productSections"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $productSection = null;

        return view("product-sections.add_edit", compact("productSection"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate(
            [
                "name" => "required",
                "file" => "required|file"
            ]
        );

        $fileName = "product_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/product-sections", $fileName);

        ProductSection::create(
            [
                "name" => $request->name,
                "file" => $filePath
            ]
        );

        return redirect()->route("product-sections.index")->withToastSuccess("Product Section Template Created Successfully");
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
        if (!auth()->user()->can('edit product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $productSection = ProductSection::findOrFail($id);

        return view("product-sections.add_edit", compact("productSection"));
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
        if (!auth()->user()->can('edit product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "name" => "required",
            "file" => "nullable|file",
        ]);

        $productSection = ProductSection::findOrFail($id);
        if ($request->hasFile("file")) {

            if ($productSection->file) {
                Storage::delete($productSection->file);
            }

            $fileName = "product_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/product-sections", $fileName);

            $productSection->update([
                "file" => $filePath
            ]);
        }

        $productSection->update([
            "name" => $request->name
        ]);

        return redirect()->route("product-sections.index")->withToastSuccess("Product Section Template Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $productSection = ProductSection::findOrFail($id);

        if ($productSection->file) {
            Storage::delete($productSection->file);
        }

        $productSection->delete();

        return redirect()->route("product-sections.index")->withToastSuccess("Product Section Template Deleted Successfully");
    }
}
