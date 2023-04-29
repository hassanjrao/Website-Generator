<?php

namespace App\Http\Controllers;

use App\Models\HeaderTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->user()->can('view headers')){
            return abort(403,"You don't have permission to access this page");
        }

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
        if(!auth()->user()->can('create headers')){
            return abort(403,"You don't have permission to access this page");
        }
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
        if(!auth()->user()->can('create headers')){
            return abort(403,"You don't have permission to access this page");
        }

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
        if(!auth()->user()->can('edit headers')){
            return abort(403,"You don't have permission to access this page");
        }
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
        if(!auth()->user()->can('edit headers')){
            return abort(403,"You don't have permission to access this page");
        }
        $request->validate([
            "name"=>"required",
            "file"=>"nullable|file",
        ]);

        $header=HeaderTemplate::findOrFail($id);

        if($request->hasFile("file")){

            if($header->file){
                Storage::delete($header->file);
            }

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
        if(!auth()->user()->can('delete headers')){
            return abort(403,"You don't have permission to access this page");
        }
        $headerTemplate=HeaderTemplate::findOrFail($id);

        if($headerTemplate->file){
            Storage::delete($headerTemplate->file);
        }

        $headerTemplate->delete();

        return redirect()->route("headers.index")->withToastSuccess("Header Template Deleted Successfully");
    }
}
