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
        $popularTitle=PopularTitle::findOrFail($id);

        $popularTitle->delete();

        return redirect()->route("popular-titles.index")->withToastSuccess("Popular Title deleted successfully");

    }
}
