<?php

namespace App\Http\Controllers;

use App\Models\HeaderTemplate;
use Illuminate\Http\Request;

class HeaderTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = HeaderTemplate::latest()->get();

        return view("header-template.index", compact("headers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = null;

        return view("header-template.add_edit", compact("header"));
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
            "name" => "required",
            "file" => "required|file",
        ]);

        $fileName="header_".time()."_". $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/headers", $fileName, "public");

        HeaderTemplate::create([
            "name" => $request->name,

            "file" => $filePath
        ]);

        return redirect()->route("headers.index")->withToastSuccess("Header Template Created Successfully");
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
        $header=HeaderTemplate::findOrFail($id);

        return view("header-template.add_edit",compact("header"));
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
            "name"=>"required",
            "file"=>"nullable|file",
        ]);

        $header=HeaderTemplate::findOrFail($id);

        if($request->hasFile("file")){
            $fileName="header_".time()."_". $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/headers", $fileName, "public");

            $header->update([
                "name"=>$request->name,
                "file"=>$filePath
            ]);

        }

        $header->update([
            "name"=>$request->name,
        ]);

        return redirect()->route("headers.index")->withToastSuccess("Header Template Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}