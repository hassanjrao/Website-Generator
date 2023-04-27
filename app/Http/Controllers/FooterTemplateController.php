<?php

namespace App\Http\Controllers;

use App\Models\FooterTemplate;
use Illuminate\Http\Request;

class FooterTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $request->validate([
            "name"=>"required",
            "file"=>"nullable|file"
        ]);

        $footer = FooterTemplate::findOrFail($id);

        if($request->hasFile("file")){
            $fileName="footer_".time()."_". $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/footers", $fileName, "public");

            $footer->update([
                "file"=>$filePath
            ]);

        }

        $footer->update([
            "name"=>$request->name
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
        //
    }
}
