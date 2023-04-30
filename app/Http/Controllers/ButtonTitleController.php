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
        $buttonTitle=ButtonName::findOrFail($id);

        $buttonTitle->delete();

        return redirect()->route("button-titles.index")->withToastSuccess("Button Title deleted successfully");

    }
}
