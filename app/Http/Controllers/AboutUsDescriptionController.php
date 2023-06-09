<?php

namespace App\Http\Controllers;

use App\Models\AboutUsDescription;
use Illuminate\Http\Request;

class AboutUsDescriptionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view aboutus descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
        $aboutUsDescriptions=AboutUsDescription::latest()->get();

        return view("about-us-descriptions.index",compact("aboutUsDescriptions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create aboutus descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
        $aboutUsDescription=null;

        return view("about-us-descriptions.add_edit",compact("aboutUsDescription"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create aboutus descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "description"=>"required"
        ]);

        AboutUsDescription::create([
            "description"=>$request->description,
        ]);

        return redirect()->route("about-us-descriptions.index")->withToastSuccess("About Us description added successfully");
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
        if (!auth()->user()->can('edit aboutus descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
        $aboutUsDescription=AboutUsDescription::findOrFail($id);

        return view("about-us-descriptions.add_edit",compact("aboutUsDescription"));
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
        if (!auth()->user()->can('edit aboutus descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "description"=>"required"
        ]);

        $aboutUsDescription=AboutUsDescription::findOrFail($id);

        $aboutUsDescription->update([
            "description"=>$request->description,
        ]);

        return redirect()->route("about-us-descriptions.index")->withToastSuccess("About Us description updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete aboutus descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
        $aboutUsDescription=AboutUsDescription::findOrFail($id);

        $aboutUsDescription->delete();

        return redirect()->route("about-us-descriptions.index")->withToastSuccess("About Us description deleted successfully");

    }
}
