<?php

namespace App\Http\Controllers;

use App\Models\AdvertisingCompany;
use App\Models\BillingModel;
use Illuminate\Http\Request;

class AdvertisingCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->user()->can('view advertising companies')){
            return abort(403,"You don't have permission to access this page");
        }
        $advertisingCompanies=AdvertisingCompany::latest()->get();

        return view("advertising-companies.index",compact("advertisingCompanies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(!auth()->user()->can('create advertising companies')){
            return abort(403,"You don't have permission to access this page");
        }

        $advertisingCompany=null;

        return view("advertising-companies.add_edit",compact("advertisingCompany"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!auth()->user()->can('create advertising companies')){
            return abort(403,"You don't have permission to access this page");
        }



        $request->validate([
            "name"=>"required",
        ]);

        AdvertisingCompany::create([
            "name"=>$request->name,
        ]);

        return redirect()->route("advertising-companies.index")->withToastSuccess("Advertising Company created successfully");

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
        if(!auth()->user()->can('edit advertising companies')){
            return abort(403,"You don't have permission to access this page");
        }

        $advertisingCompany=AdvertisingCompany::findOrFail($id);


        return view("advertising-companies.add_edit",compact("advertisingCompany"));

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
        if(!auth()->user()->can('edit advertising companies')){
            return abort(403,"You don't have permission to access this page");
        }

        $advertisingCompany=AdvertisingCompany::findOrFail($id);

        $request->validate([
            "name"=>"required",

        ]);

        $advertisingCompany->update([
            "name"=>$request->name,
        ]);

        return redirect()->route("advertising-companies.index")->withToastSuccess("Advertising Company updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!auth()->user()->can('delete advertising companies')){
            return abort(403,"You don't have permission to access this page");
        }

        $advertisingCompany=AdvertisingCompany::findOrFail($id);

        $advertisingCompany->delete();

        return redirect()->route("advertising-companies.index")->withToastSuccess("Advertising Company deleted successfully");
    }
}
