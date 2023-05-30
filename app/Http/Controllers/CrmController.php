<?php

namespace App\Http\Controllers;

use App\Models\AdvertisingCompany;
use App\Models\BillingModel;
use App\Models\Crm;
use Illuminate\Http\Request;

class CrmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crms=Crm::latest()->with("advertisingCompany")->get();


        return view("crms.index",compact("crms"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crm=null;

        $billingModels=BillingModel::all();

        $advertisingCompanies=AdvertisingCompany::all();

        return view("crms.add_edit",compact("crm","billingModels","advertisingCompanies"));
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
            "url"=>"required",
            "username"=>"required",
            "password"=>"required",
            "shipping_id"=>"required",
            "compaign_id"=>"required",
            "tran_type"=>"required",
            "offer_id"=>"required",
            "billing_model"=>"required|exists:billing_models,id",
            "gateway_id"=>"required",
        ]);

        Crm::create([
            "advertising_company_id"=>$request->advertising_company_id,
            "url"=>$request->url,
            "username"=>$request->username,
            "password"=>$request->password,
            "shipping_id"=>$request->shipping_id,
            "compaign_id"=>$request->compaign_id,
            "tran_type"=>$request->tran_type,
            "offer_id"=>$request->offer_id,
            "billing_model_id"=>$request->billing_model,
            "gateway_id"=>$request->gateway_id,
        ]);

        return redirect()->route("crms.index")->with("success","Crm added successfully");
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
        $crm=Crm::findOrFail($id);

        $billingModels=BillingModel::all();

        $advertisingCompanies=AdvertisingCompany::all();

        return view("crms.add_edit",compact("crm","billingModels","advertisingCompanies"));
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

            "advertising_company_id"=>"required|exists:advertising_companies,id",
            "url"=>"required",
            "username"=>"required",
            "password"=>"required",
            "shipping_id"=>"required",
            "compaign_id"=>"required",
            "tran_type"=>"required",
            "offer_id"=>"required",
            "billing_model"=>"required|exists:billing_models,id",
            "gateway_id"=>"required",
        ]);

        $crm=Crm::findOrFail($id);

        $crm->update([
            "advertising_company_id"=>$request->advertising_company_id,
            "url"=>$request->url,
            "username"=>$request->username,
            "password"=>$request->password,
            "shipping_id"=>$request->shipping_id,
            "compaign_id"=>$request->compaign_id,
            "tran_type"=>$request->tran_type,
            "offer_id"=>$request->offer_id,
            "billing_model_id"=>$request->billing_model,
            "gateway_id"=>$request->gateway_id,
        ]);

        return redirect()->route("crms.index")->with("success","Crm updated successfully");
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
