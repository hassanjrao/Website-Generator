<?php

namespace App\Http\Controllers;

use App\Models\CartPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CartPageController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartPages=CartPage::all();

        return view("cart-pages.index", compact("cartPages"));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (!auth()->user()->can('create cart pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $cartPage = null;

        return view("cart-pages.add_edit", compact("cartPage"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (!auth()->user()->can('create cart pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $request->validate(
            [
                "name" => "required",
                "file" => "required|file"
            ]
        );

        $fileName = "cart_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("pages/carts", $fileName);

        CartPage::create(
            [
                "name" => $request->name,
                "file" => $filePath
            ]
        );

        return redirect()->route("cart-pages.index")->withToastSuccess("cart Page Created Successfully");
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
        // if (!auth()->user()->can('edit cart pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $cartPage = CartPage::findOrFail($id);

        return view("cart-pages.add_edit", compact("cartPage"));
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
        // if (!auth()->user()->can('edit cart pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $request->validate([
            "name" => "required",
            "file" => "nullable|file",
        ]);

        $cartPage = CartPage::findOrFail($id);
        if ($request->hasFile("file")) {

            if ($cartPage->file) {
                Storage::delete($cartPage->file);
            }

            $fileName = "cart_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("pages/carts", $fileName);

            $cartPage->update([
                "file" => $filePath
            ]);
        }

        $cartPage->update([
            "name" => $request->name
        ]);

        return redirect()->route("cart-pages.index")->withToastSuccess("cart Page Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (!auth()->user()->can('delete cart pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $cartPage = CartPage::findOrFail($id);

        if ($cartPage->file) {
            Storage::delete($cartPage->file);
        }

        $cartPage->delete();

        return redirect()->route("cart-pages.index")->withToastSuccess("cart Page Deleted Successfully");
    }
}
