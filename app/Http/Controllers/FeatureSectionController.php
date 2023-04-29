<?php

namespace App\Http\Controllers;

use App\Models\FeatureSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featureSections = FeatureSection::latest()->get();

        return view("feature-sections.index", compact("featureSections"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $featureSection = null;

        return view("feature-sections.add_edit", compact("featureSection"));
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
            "file" => "required|file"
        ]);

        $fileName = "feature_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/feature-sections", $fileName);

        FeatureSection::create([
            "name" => $request->name,
            "file" => $filePath
        ]);

        return redirect()->route("feature-sections.index")->withToastSuccess("feature Section Template Created Successfully");
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
        $featureSection = FeatureSection::findOrFail($id);

        return view("feature-sections.add_edit", compact("featureSection"));
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
            "file"=>"nullable|file"
        ]);

        $featureSection = FeatureSection::findOrFail($id);

        if($request->hasFile("file")){

            if($featureSection->file){
                Storage::delete($featureSection->file);
            }

            $fileName = "feature_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/feature-sections", $fileName);

            $featureSection->update([
                "file" => $filePath
            ]);
        }

        $featureSection->update([
            "name" => $request->name
        ]);

        return redirect()->route("feature-sections.index")->withToastSuccess("feature Section Template Updated Successfully");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $featureSection = FeatureSection::findOrFail($id);

        if($featureSection->file){
            Storage::delete($featureSection->file);
        }

        $featureSection->delete();

        return redirect()->route("feature-sections.index")->withToastSuccess("feature Section Template Deleted Successfully");
    }
}
