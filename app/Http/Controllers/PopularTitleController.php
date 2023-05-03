<?php

namespace App\Http\Controllers;

use App\Models\PopularTitle;
use Illuminate\Http\Request;

class PopularTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!auth()->user()->can('view popular titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $popularTitles=PopularTitle::latest()->get();

        return view("popular-titles.index",compact("popularTitles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create popular titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $popularTitle=null;

        return view("popular-titles.add_edit",compact("popularTitle"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create popular titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        PopularTitle::create([
            "title"=>$request->title,
        ]);

        return redirect()->route("popular-titles.index")->withToastSuccess("Popular Title added successfully");
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
        if (!auth()->user()->can('edit popular titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $popularTitle=PopularTitle::findOrFail($id);

        return view("popular-titles.add_edit",compact("popularTitle"));
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
        if (!auth()->user()->can('edit popular titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        $popularTitle=PopularTitle::findOrFail($id);

        $popularTitle->update([
            "title"=>$request->title,
        ]);

        return redirect()->route("popular-titles.index")->withToastSuccess("Popular Title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete popular titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $popularTitle=PopularTitle::findOrFail($id);

        $popularTitle->delete();

        return redirect()->route("popular-titles.index")->withToastSuccess("Popular Title deleted successfully");

    }
}
