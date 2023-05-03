<?php

namespace App\Http\Controllers;

use App\Models\ShopTitle;
use Illuminate\Http\Request;

class ShopTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view shop titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $shopTitles=ShopTitle::latest()->get();

        return view("shop-titles.index",compact("shopTitles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create shop titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $shopTitle=null;

        return view("shop-titles.add_edit",compact("shopTitle"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create shop titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        ShopTitle::create([
            "title"=>$request->title,
        ]);

        return redirect()->route("shop-titles.index")->withToastSuccess("Shop Title added successfully");
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
        if (!auth()->user()->can('edit shop titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $shopTitle=ShopTitle::findOrFail($id);

        return view("shop-titles.add_edit",compact("shopTitle"));
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
        if (!auth()->user()->can('edit shop titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        $shopTitle=ShopTitle::findOrFail($id);

        $shopTitle->update([
            "title"=>$request->title,
        ]);

        return redirect()->route("shop-titles.index")->withToastSuccess("Shop Title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete shop titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $shopTitle=ShopTitle::findOrFail($id);

        $shopTitle->delete();

        return redirect()->route("shop-titles.index")->withToastSuccess("Shop Title deleted successfully");

    }
}
