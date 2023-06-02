<?php

namespace App\Http\Controllers;

use App\Models\NavigationPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NavigationPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navigationPages=NavigationPage::all();

        return view("navigation-pages.index", compact("navigationPages"));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (!auth()->user()->can('create navigation pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $navigationPage = null;

        return view("navigation-pages.add_edit", compact("navigationPage"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (!auth()->user()->can('create navigation pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $request->validate(
            [
                "name" => "required",
                "file" => "required|file"
            ]
        );

        $fileName = "navigation_" . time() . "_" . $request->file("file")->getClientOriginalName();
        $filePath = $request->file("file")->storeAs("pages/navigations", $fileName);

        NavigationPage::create(
            [
                "name" => $request->name,
                "file" => $filePath
            ]
        );

        return redirect()->route("navigation-pages.index")->withToastSuccess("navigation Page Created Successfully");
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
        // if (!auth()->user()->can('edit navigation pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $navigationPage = NavigationPage::findOrFail($id);

        return view("navigation-pages.add_edit", compact("navigationPage"));
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
        // if (!auth()->user()->can('edit navigation pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $request->validate([
            "name" => "required",
            "file" => "nullable|file",
        ]);

        $navigationPage = NavigationPage::findOrFail($id);
        if ($request->hasFile("file")) {

            if ($navigationPage->file) {
                Storage::delete($navigationPage->file);
            }

            $fileName = "navigation_" . time() . "_" . $request->file("file")->getClientOriginalName();
            $filePath = $request->file("file")->storeAs("pages/navigations", $fileName);

            $navigationPage->update([
                "file" => $filePath
            ]);
        }

        $navigationPage->update([
            "name" => $request->name
        ]);

        return redirect()->route("navigation-pages.index")->withToastSuccess("navigation Page Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (!auth()->user()->can('delete navigation pages')) {
        //     return abort(403, "You don't have permission to access this page");
        // }
        $navigationPage = NavigationPage::findOrFail($id);

        if ($navigationPage->file) {
            Storage::delete($navigationPage->file);
        }

        $navigationPage->delete();

        return redirect()->route("navigation-pages.index")->withToastSuccess("navigation Page Deleted Successfully");
    }                                            
}
