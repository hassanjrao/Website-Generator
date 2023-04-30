<?php

namespace App\Http\Controllers;

use App\Models\CheckoutPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CheckoutPageController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view checkout pages')) {
            return abort(403, "You don't have permission to access this page");
        }

        $checkoutPages = CheckoutPage::latest()->get();

        return view("checkout-pages.index", compact("checkoutPages"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create checkout pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $checkoutPage = null;

        return view("checkout-pages.add_edit", compact("checkoutPage"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create checkout pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate(
            [
                "name" => "required",
                "file" => "required|file"
            ]
        );

        $fileName = "checkout_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("pages/checkouts", $fileName);

        CheckoutPage::create(
            [
                "name" => $request->name,
                "file" => $filePath
            ]
        );

        return redirect()->route("checkout-pages.index")->withToastSuccess("Checkout Page Created Successfully");
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
        if (!auth()->user()->can('edit checkout pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $checkoutPage = CheckoutPage::findOrFail($id);

        return view("checkout-pages.add_edit", compact("checkoutPage"));
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
        if (!auth()->user()->can('edit checkout pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "name" => "required",
            "file" => "nullable|file",
        ]);

        $checkoutPage = CheckoutPage::findOrFail($id);
        if ($request->hasFile("file")) {

            if ($checkoutPage->file) {
                Storage::delete($checkoutPage->file);
            }

            $fileName = "checkout_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("pages/checkouts", $fileName);

            $checkoutPage->update([
                "file" => $filePath
            ]);
        }

        $checkoutPage->update([
            "name" => $request->name
        ]);

        return redirect()->route("checkout-pages.index")->withToastSuccess("Checkout Page Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete checkout pages')) {
            return abort(403, "You don't have permission to access this page");
        }
        $checkoutPage = CheckoutPage::findOrFail($id);

        if ($checkoutPage->file) {
            Storage::delete($checkoutPage->file);
        }

        $checkoutPage->delete();

        return redirect()->route("checkout-pages.index")->withToastSuccess("Checkout Page Deleted Successfully");
    }
}
