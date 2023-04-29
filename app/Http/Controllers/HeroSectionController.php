<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view hero sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $heroSections = HeroSection::latest()->get();

        return view("hero-sections.index", compact("heroSections"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create hero sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $heroSection = null;

        return view("hero-sections.add_edit", compact("heroSection"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create hero sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "name" => "required",
            "file" => "required|file"
        ]);

        $fileName = "hero_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/hero-sections", $fileName, "public");

        HeroSection::create([
            "name" => $request->name,
            "file" => $filePath
        ]);

        return redirect()->route("hero-sections.index")->withToastSuccess("Hero Section Template Created Successfully");
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
        if (!auth()->user()->can('edit hero sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $heroSection = HeroSection::findOrFail($id);

        return view("hero-sections.add_edit", compact("heroSection"));
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
        if (!auth()->user()->can('edit hero sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([

            "name" => "required",
            "file" => "nullable|file"

        ]);

        $heroSection = HeroSection::findOrFail($id);


        if($request->hasFile("file")){

            if($heroSection->file){
                Storage::delete($heroSection->file);
            }

            $fileName="hero_".time()."_". $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/hero-sections", $fileName, "public");

            $heroSection->update([

                "file"=>$filePath
            ]);

        }

        $heroSection->update([
            "name"=>$request->name
        ]);

        return redirect()->route("hero-sections.index")->withToastSuccess("Hero Section Template Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete hero sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $heroSection = HeroSection::findOrFail($id);

        if($heroSection->file){
            Storage::delete($heroSection->file);
        }

        $heroSection->delete();

        return redirect()->route("hero-sections.index")->withToastSuccess("Hero Section Template Deleted Successfully");
    }
}
