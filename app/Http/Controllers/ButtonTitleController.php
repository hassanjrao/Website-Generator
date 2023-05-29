<?php

namespace App\Http\Controllers;

use App\Models\ButtonName;
use Illuminate\Http\Request;

class ButtonTitleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view button titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $buttonTitles=ButtonName::latest()->get();

        return view("button-titles.index",compact("buttonTitles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (!auth()->user()->can('create button titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $buttonTitle=null;

        return view("button-titles.add_edit",compact("buttonTitle"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!auth()->user()->can('create button titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        ButtonName::create([
            "title"=>$request->title,
        ]);

        return redirect()->route("button-titles.index")->withToastSuccess("Button Title added successfully");
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

        if (!auth()->user()->can('edit button titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $buttonTitle=ButtonName::findOrFail($id);

        return view("button-titles.add_edit",compact("buttonTitle"));
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

        if (!auth()->user()->can('edit button titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        $buttonTitle=ButtonName::findOrFail($id);

        $buttonTitle->update([
            "title"=>$request->title,
        ]);

        return redirect()->route("button-titles.index")->withToastSuccess("Button Title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (!auth()->user()->can('delete button titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $buttonTitle=ButtonName::findOrFail($id);

        $buttonTitle->delete();

        return redirect()->route("button-titles.index")->withToastSuccess("Button Title deleted successfully");

    }
}
