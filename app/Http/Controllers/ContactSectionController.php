<?php

namespace App\Http\Controllers;

use App\Models\ContactSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactSections = ContactSection::latest()->get();

        return view("contact-sections.index", compact("contactSections"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contactSection = null;

        return view("contact-sections.add_edit", compact("contactSection"));
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

        $fileName = "contact_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("templates/contact-sections", $fileName);

        ContactSection::create([
            "name" => $request->name,
            "file" => $filePath
        ]);

        return redirect()->route("contact-sections.index")->withToastSuccess("contact Section Template Created Successfully");
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
        $contactSection = ContactSection::findOrFail($id);

        return view("contact-sections.add_edit", compact("contactSection"));
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

        $contactSection = ContactSection::findOrFail($id);

        if($request->hasFile("file")){

            if($contactSection->file){
                Storage::delete($contactSection->file);
            }

            $fileName = "contact_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("templates/contact-sections", $fileName);

            $contactSection->update([
                "file" => $filePath
            ]);
        }

        $contactSection->update([
            "name" => $request->name
        ]);

        return redirect()->route("contact-sections.index")->withToastSuccess("contact Section Template Updated Successfully");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactSection = ContactSection::findOrFail($id);

        if($contactSection->file){
            Storage::delete($contactSection->file);
        }

        $contactSection->delete();

        return redirect()->route("contact-sections.index")->withToastSuccess("contact Section Template Deleted Successfully");
    }
}
