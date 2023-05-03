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
        if (!auth()->user()->can('view contact descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('create contact descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('create contact descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('edit contact descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('edit contact descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
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
        if (!auth()->user()->can('delete contact descriptions')) {
            return abort(403, "You don't have permission to access this page");
        }
        $contactDescription=ContactContent::findOrFail($id);

        $contactDescription->delete();

        return redirect()->route("contact-descriptions.index")->withToastSuccess("About Us description deleted successfully");

    }
}
