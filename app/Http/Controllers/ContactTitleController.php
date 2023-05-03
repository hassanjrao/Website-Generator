<?php

namespace App\Http\Controllers;

use App\Models\ContactTitle;
use Illuminate\Http\Request;

class ContactTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('view contact titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $contactTitles=ContactTitle::latest()->get();

        return view("contact-titles.index",compact("contactTitles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('create contact titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $contactTitle=null;

        return view("contact-titles.add_edit",compact("contactTitle"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('create contact titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        ContactTitle::create([
            "title"=>$request->title,
        ]);

        return redirect()->route("contact-titles.index")->withToastSuccess("contact Title added successfully");
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
        if (!auth()->user()->can('edit contact titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $contactTitle=ContactTitle::findOrFail($id);

        return view("contact-titles.add_edit",compact("contactTitle"));
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
        if (!auth()->user()->can('edit contact titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $request->validate([
            "title"=>"required"
        ]);

        $contactTitle=ContactTitle::findOrFail($id);

        $contactTitle->update([
            "title"=>$request->title,
        ]);

        return redirect()->route("contact-titles.index")->withToastSuccess("contact Title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete contact titles')) {
            return abort(403, "You don't have permission to access this page");
        }
        $contactTitle=ContactTitle::findOrFail($id);

        $contactTitle->delete();

        return redirect()->route("contact-titles.index")->withToastSuccess("contact Title deleted successfully");

    }
}
