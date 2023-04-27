<?php

namespace App\Http\Controllers;

use App\Models\PopularProductSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PopularProductSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularProductSections = PopularProductSection::latest()->get();

        return view("popular-product-sections.index", compact("popularProductSections"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $popularProductSection = null;

        return view("popular-product-sections.add_edit", compact("popularProductSection"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "name" => "required",
                "file" => "required|file"
            ]
        );

        $fileName = "popular_product_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/popular-product-sections", $fileName);

        PopularProductSection::create(
            [
                "name" => $request->name,
                "file" => $filePath
            ]
        );

        return redirect()->route("popular-product-sections.index")->withToastSuccess("Popular Product Section Template Created Successfully");
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
        $popularProductSection = PopularProductSection::findOrFail($id);

        return view("popular-product-sections.add_edit", compact("popularProductSection"));
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
        $request->validate(
            [

                "name" => "required",
                "file" => "nullable|file"
            ]
        );

        $popularProductSection = PopularProductSection::findOrFail($id);


        if($request->hasFile("file")){

            if($popularProductSection->file){
                Storage::delete($popularProductSection->file);
            }

            $fileName="popular_".time()."_". $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/popular-product-sections", $fileName, "public");

            $popularProductSection->update([

                "file"=>$filePath
            ]);

        }

        $popularProductSection->update(
            [
                "name" => $request->name,
            ]
        );

        return redirect()->route("popular-product-sections.index")->withToastSuccess("Popular Product Section Template Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popularProductSection = PopularProductSection::findOrFail($id);

        if($popularProductSection->file){
            Storage::delete($popularProductSection->file);
        }

        $popularProductSection->delete();

        return redirect()->route("popular-product-sections.index")->withToastSuccess("Popular Product Section Template Deleted Successfully");
    }
}
