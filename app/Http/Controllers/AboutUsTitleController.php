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
        if (!auth()->user()->can('view aboutus titles')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('create aboutus titles')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('create aboutus titles')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('edit aboutus titles')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('edit aboutus titles')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('delete aboutus titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $aboutUsTitle=AboutUsTitle::findOrFail($id);

        $aboutUsTitle->delete();

        return redirect()->route("about-us-titles.index")->withToastSuccess("About Us Title deleted successfully");

    }
}
