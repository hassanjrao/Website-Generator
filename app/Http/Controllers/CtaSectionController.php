<?php

namespace App\Http\Controllers;

use App\Models\CtaSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CtaSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view cta sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $ctaSections = CtaSection::latest()->get();

        return view("cta-sections.index", compact("ctaSections"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create cta sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $ctaSection = null;

        return view("cta-sections.add_edit", compact("ctaSection"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create cta sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate(
            [
                "name" => "required",
                "file" => "required|file"
            ]
        );

        $fileName = "cta_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/cta-sections", $fileName);

        CtaSection::create(
            [
                "name" => $request->name,
                "file" => $filePath
            ]
        );

        return redirect()->route("cta-sections.index")->withToastSuccess("cta Section Template Created Successfully");
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
        if (!auth()->user()->can('edit cta sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $ctaSection = CtaSection::findOrFail($id);

        return view("cta-sections.add_edit", compact("ctaSection"));
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
        if (!auth()->user()->can('edit cta sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "name" => "required",
            "file" => "nullable|file",
        ]);

        $ctaSection = CtaSection::findOrFail($id);
        if ($request->hasFile("file")) {

            if ($ctaSection->file) {
                Storage::delete($ctaSection->file);
            }


            $fileName = "cta_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/cta-sections", $fileName);

            $ctaSection->update([
                "file" => $filePath
            ]);
        }

        $ctaSection->update([
            "name" => $request->name
        ]);

        return redirect()->route("cta-sections.index")->withToastSuccess("cta Section Template Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete cta sections')) {
            return abort(403, "You don't have permission to access this page");
        }
        $ctaSection = CtaSection::findOrFail($id);

        if ($ctaSection->file) {
            Storage::delete($ctaSection->file);
        }

        $ctaSection->delete();

        return redirect()->route("cta-sections.index")->withToastSuccess("cta Section Template Deleted Successfully");
    }
}
