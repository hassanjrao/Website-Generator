<?php

namespace App\Http\Controllers;

use App\Models\RelatedProductSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RelatedProductSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view related product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $relatedProductSections = RelatedProductSection::latest()->get();

        return view("related-product-sections.index", compact("relatedProductSections"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create related product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $relatedProductSection = null;

        return view("related-product-sections.add_edit", compact("relatedProductSection"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create related product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate(
            [
                "name" => "required",
                "file" => "required|file"
            ]
        );

        $fileName = "related_product_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/related-product-sections", $fileName);

        RelatedProductSection::create(
            [
                "name" => $request->name,
                "file" => $filePath
            ]
        );

        return redirect()->route("related-product-sections.index")->withToastSuccess("Related Product Section Template Created Successfully");
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
        if (!auth()->user()->can('edit related product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $relatedProductSection = RelatedProductSection::findOrFail($id);

        return view("related-product-sections.add_edit", compact("relatedProductSection"));
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
        if (!auth()->user()->can('edit related product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate(
            [

                "name" => "required",
                "file" => "nullable|file"
            ]
        );

        $relatedProductSection = RelatedProductSection::findOrFail($id);


        if($request->hasFile("file")){

            if($relatedProductSection->file){
                Storage::delete($relatedProductSection->file);
            }

            $fileName="related_".time()."_". $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/related-product-sections", $fileName, "public");

            $relatedProductSection->update([

                "file"=>$filePath
            ]);

        }

        $relatedProductSection->update(
            [
                "name" => $request->name,
            ]
        );

        return redirect()->route("related-product-sections.index")->withToastSuccess("Related Product Section Template Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete related product sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $relatedProductSection = RelatedProductSection::findOrFail($id);

        if($relatedProductSection->file){
            Storage::delete($relatedProductSection->file);
        }

        $relatedProductSection->delete();

        return redirect()->route("related-product-sections.index")->withToastSuccess("Related Product Section Template Deleted Successfully");
    }
}
