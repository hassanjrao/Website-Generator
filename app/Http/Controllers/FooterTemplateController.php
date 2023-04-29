<?php

namespace App\Http\Controllers;

use App\Models\FooterTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view footers')) {
            return abort(403, "You don't have permission to access this page");
        }
        $footers = FooterTemplate::latest()->get();

        return view("footer-template.index", compact("footers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create footers')) {
            return abort(403, "You don't have permission to access this page");
        }
        $footer = null;

        return view("footer-template.add_edit", compact("footer"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create footers')) {
            return abort(403, "You don't have permission to access this page");
        }

        $request->validate([
            "name" => "required",
            "file" => "required"
        ]);

        $fileName = "footer_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/footers", $fileName, "public");

        FooterTemplate::create([
            "name" => $request->name,
            "file" => $filePath
        ]);

        return redirect()->route("footers.index")->withToastSuccess("Footer Template Created Successfully");
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
        if (!auth()->user()->can('edit footers')) {
            return abort(403, "You don't have permission to access this page");
        }
        $footer = FooterTemplate::findOrFail($id);

        return view("footer-template.add_edit", compact("footer"));
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
        if (!auth()->user()->can('edit footers')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "name" => "required",
            "file" => "nullable|file"
        ]);

        $footer = FooterTemplate::findOrFail($id);

        if ($request->hasFile("file")) {

            if ($footer->file) {
                Storage::disk("public")->delete($footer->file);
            }


            $fileName = "footer_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/footers", $fileName, "public");

            $footer->update([
                "file" => $filePath
            ]);
        }

        $footer->update([
            "name" => $request->name
        ]);

        return redirect()->route("footers.index")->withToastSuccess("Footer Template Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete footers')) {
            return abort(403, "You don't have permission to access this page");
        }
        $footerTemplate = FooterTemplate::findOrFail($id);

        if ($footerTemplate->file) {
            Storage::delete($footerTemplate->file);
        }

        $footerTemplate->delete();

        return redirect()->route("footers.index")->withToastSuccess("Footer Template Deleted Successfully");
    }
}
