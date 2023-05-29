<?php

namespace App\Http\Controllers;

use App\Models\Slogan;
use Illuminate\Http\Request;

class SloganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!auth()->user()->can('view slogans')) {
            return abort(403, "You don't have permission to access this page");
        }


        $slogans=Slogan::latest()->get();

        return view("slogans.index",compact("slogans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create slogans')) {
            return abort(403, "You don't have permission to access this page");
        }
        $slogan=null;

        return view("slogans.add_edit",compact("slogan"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create slogans')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        Slogan::create([
            "title"=>$request->title,
        ]);

        return redirect()->route("slogans.index")->withToastSuccess("Slogan added successfully");
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
        if (!auth()->user()->can('edit slogans')) {
            return abort(403, "You don't have permission to access this page");
        }
        $slogan=Slogan::findOrFail($id);

        return view("slogans.add_edit",compact("slogan"));
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
        if (!auth()->user()->can('edit slogans')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        $slogan=Slogan::findOrFail($id);

        $slogan->update([
            "title"=>$request->title,
        ]);

        return redirect()->route("slogans.index")->withToastSuccess("Slogan updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete slogans')) {
            return abort(403, "You don't have permission to access this page");
        }
        $slogan=Slogan::findOrFail($id);

        $slogan->delete();

        return redirect()->route("slogans.index")->withToastSuccess("Slogan deleted successfully");

    }

    public function updateTitle(Request $request){

        $request->validate([
            "id"=>"required|exists:slogans,id",
            "title"=>"required"
        ]);

        $slogan=Slogan::findOrFail($request->id);

        $slogan->update([
            "title"=>$request->title,
        ]);

        return response()->json([
            "message"=>"Slogan updated successfully"
        ]);

    }
}
