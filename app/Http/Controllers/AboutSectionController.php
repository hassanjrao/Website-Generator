<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view about sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $aboutSections = AboutSection::latest()->get();

        return view("about-sections.index", compact("aboutSections"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create about sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $aboutSection = null;

        return view("about-sections.add_edit", compact("aboutSection"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create about sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "name" => "required",
            "file" => "required|file"
        ]);

        $fileName = "about_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/about-sections", $fileName);

        AboutSection::create([
            "name" => $request->name,
            "file" => $filePath
        ]);

        return redirect()->route("about-sections.index")->withToastSuccess("About Section Template Created Successfully");
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
        if (!auth()->user()->can('edit about sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $aboutSection = AboutSection::findOrFail($id);

        return view("about-sections.add_edit", compact("aboutSection"));
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
        if (!auth()->user()->can('edit about sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "name"=>"required",
            "file"=>"nullable|file"
        ]);

        $aboutSection = AboutSection::findOrFail($id);

        if($request->hasFile("file")){

            if($aboutSection->file){
                Storage::delete($aboutSection->file);
            }

            $fileName = "about_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/about-sections", $fileName);

            $aboutSection->update([
                "file" => $filePath
            ]);
        }

        $aboutSection->update([
            "name" => $request->name
        ]);

        return redirect()->route("about-sections.index")->withToastSuccess("About Section Template Updated Successfully");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete about sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $aboutSection = AboutSection::findOrFail($id);

        if($aboutSection->file){
            Storage::delete($aboutSection->file);
        }

        $aboutSection->delete();

        return redirect()->route("about-sections.index")->withToastSuccess("About Section Template Deleted Successfully");
    }
}
