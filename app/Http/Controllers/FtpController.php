<?php

namespace App\Http\Controllers;

use App\Models\AdvertisingCompany;
use App\Models\Ftp;
use Illuminate\Http\Request;

class FtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ftps = Ftp::latest()->get();

        return view("ftps.index", compact("ftps"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ftp = null;
        $advertisingCompanies=AdvertisingCompany::all();

        return view("ftps.add_edit", compact("ftp","advertisingCompanies"));
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
            "advertising_company_id"=>"required|exists:advertising_companies,id",
            "name"=>"required",
            "host" => "required",
            "username" => "required",
            "password" => "required",
            "port" => "required",
            "root_path" => "required",
        ]);

        Ftp::create($request->all());

        return redirect()->route("ftps.index")->with("success", "FTP added successfully");
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
        $ftp = Ftp::find($id);
        $advertisingCompanies=AdvertisingCompany::all();


        return view("ftps.add_edit", compact("ftp","advertisingCompanies"));
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
        $ftp=Ftp::findorfail($id);

        $request->validate([
            "advertising_company_id"=>"required|exists:advertising_companies,id",
            "name"=>"required",
            "host" => "required",
            "username" => "required",
            "password" => "required",
            "port" => "required",
            "root_path" => "required",
        ]);

        $ftp->update($request->all());

        return redirect()->route("ftps.index")->with("success", "FTP updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ftp=Ftp::findorfail($id);

        $ftp->delete();

        return redirect()->route("ftps.index")->withToastSuccess("Deleted successfully");
    }
}
