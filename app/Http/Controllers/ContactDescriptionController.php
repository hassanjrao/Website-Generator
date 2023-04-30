<?php

namespace App\Http\Controllers;

use App\Models\ContactContent;
use Illuminate\Http\Request;

class ContactDescriptionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactDescriptions=ContactContent::latest()->get();

        return view("contact-descriptions.index",compact("contactDescriptions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contactDescription=null;

        return view("contact-descriptions.add_edit",compact("contactDescription"));
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
            "description"=>"required"
        ]);

        ContactContent::create([
            "description"=>$request->description,
        ]);

        return redirect()->route("contact-descriptions.index")->withToastSuccess("About Us description added successfully");
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
        $contactDescription=ContactContent::findOrFail($id);

        return view("contact-descriptions.add_edit",compact("contactDescription"));
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
            "description"=>"required"
        ]);

        $contactDescription=ContactContent::findOrFail($id);

        $contactDescription->update([
            "description"=>$request->description,
        ]);

        return redirect()->route("contact-descriptions.index")->withToastSuccess("About Us description updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactDescription=ContactContent::findOrFail($id);

        $contactDescription->delete();

        return redirect()->route("contact-descriptions.index")->withToastSuccess("About Us description deleted successfully");

    }
}
