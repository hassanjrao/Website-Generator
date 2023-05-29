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
        if (!auth()->user()->can('view taglines')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('create taglines')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('create taglines')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('edit taglines')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('edit taglines')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('delete taglines')) {
            return abort(403, "You don't have permission to access this page");
        }
        $tagLine=TagLine::findOrFail($id);

        $tagLine->delete();

        return redirect()->route("tag-lines.index")->withToastSuccess("Tag Line deleted successfully");

    }
}
