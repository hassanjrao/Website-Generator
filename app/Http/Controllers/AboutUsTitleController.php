<?php

namespace App\Http\Controllers;

use App\Models\AboutUsTitle;
use Illuminate\Http\Request;

class AboutUsTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUsTitles=AboutUsTitle::latest()->get();

        return view("about-us-titles.index",compact("aboutUsTitles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aboutUsTitle=null;

        return view("about-us-titles.add_edit",compact("aboutUsTitle"));
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

        AboutUsTitle::create([
            "title"=>$request->title,
        ]);

        return redirect()->route("about-us-titles.index")->withToastSuccess("About Us Title added successfully");
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
        $aboutUsTitle=AboutUsTitle::findOrFail($id);

        return view("about-us-titles.add_edit",compact("aboutUsTitle"));
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

        $aboutUsTitle=AboutUsTitle::findOrFail($id);

        $aboutUsTitle->update([
            "title"=>$request->title,
        ]);

        return redirect()->route("about-us-titles.index")->withToastSuccess("About Us Title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutUsTitle=AboutUsTitle::findOrFail($id);

        $aboutUsTitle->delete();

        return redirect()->route("about-us-titles.index")->withToastSuccess("About Us Title deleted successfully");

    }
}
