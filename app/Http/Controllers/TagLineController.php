<?php

namespace App\Http\Controllers;

use App\Models\TagLine;
use Illuminate\Http\Request;

class TagLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tagLines=TagLine::latest()->get();

        return view("tag-lines.index",compact("tagLines"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tagLine=null;

        return view("tag-lines.add_edit",compact("tagLine"));
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

        TagLine::create([
            "title"=>$request->title,
        ]);

        return redirect()->route("tag-lines.index")->withToastSuccess("Tag Line added successfully");
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
        $tagLine=TagLine::findOrFail($id);

        return view("tag-lines.add_edit",compact("tagLine"));
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

        $tagLine=TagLine::findOrFail($id);

        $tagLine->update([
            "title"=>$request->title,
        ]);

        return redirect()->route("tag-lines.index")->withToastSuccess("Tag Line updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tagLine=TagLine::findOrFail($id);

        $tagLine->delete();

        return redirect()->route("tag-lines.index")->withToastSuccess("Tag Line deleted successfully");

    }
}
