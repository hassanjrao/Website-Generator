<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactPages=ContactPage::all();

        return view("contact-pages.index", compact("contactPages"));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (!auth()->user()->can('create contact pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $contactPage = null;

        return view("contact-pages.add_edit", compact("contactPage"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (!auth()->user()->can('create contact pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $request->validate(
            [
                "name" => "required",
                "file" => "required|file"
            ]
        );

        $fileName = "contact_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("pages/contacts", $fileName);

        contactPage::create(
            [
                "name" => $request->name,
                "file" => $filePath
            ]
        );

        return redirect()->route("contact-pages.index")->withToastSuccess("contact Page Created Successfully");
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
        // if (!auth()->user()->can('edit contact pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $contactPage = contactPage::findOrFail($id);

        return view("contact-pages.add_edit", compact("contactPage"));
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
        // if (!auth()->user()->can('edit contact pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $request->validate([
            "name" => "required",
            "file" => "nullable|file",
        ]);

        $contactPage = contactPage::findOrFail($id);
        if ($request->hasFile("file")) {

            if ($contactPage->file) {
                Storage::delete($contactPage->file);
            }

            $fileName = "contact_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("pages/contacts", $fileName);

            $contactPage->update([
                "file" => $filePath
            ]);
        }

        $contactPage->update([
            "name" => $request->name
        ]);

        return redirect()->route("contact-pages.index")->withToastSuccess("contact Page Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (!auth()->user()->can('delete contact pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $contactPage = contactPage::findOrFail($id);

        if ($contactPage->file) {
            Storage::delete($contactPage->file);
        }

        $contactPage->delete();

        return redirect()->route("contact-pages.index")->withToastSuccess("contact Page Deleted Successfully");
    }
}
