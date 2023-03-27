<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $sites = Site::latest()
            ->with(['createdBy', 'updatedBy'])
            ->get();


        return view('sites.index', compact('sites'));
    }

    public function create()
    {
        $site = null;
        return view('sites.add_edit', compact('site'));
    }

    public function store(Request $request)
    {

        $request->validate([
            "site_name" => "required",
            "url" => "required|url",
            "email" => "required|email",
            "phone" => "required",
            "address" => "required",
            "corp_name" => "required",
            "description" => "required",
            "return_address" => "required",
            "fulfillment" => "required",
            "trial_period_breakdown" => "required",
            "shipping_period" => "required",
            "shipping_carrier" => "required",
            "style_sheet" => "required",
            "customer_service_hours" => "required",
            "maximum_ticket_value" => "required",
            "site_id" => "nullable|exists:sites,id"
        ]);


        $siteData=[
            "name" => $request->site_name,
            "url" => $request->url,
            "email" => $request->email,
            "phone_number" => $request->phone,
            "address" => $request->address,
            "corp_name" => $request->corp_name,
            "description" => $request->description,
            "return_address" => $request->return_address,
            "fulfillment" => $request->fulfillment,
            "trial_period_breakdown" => $request->trial_period_breakdown,
            "shipping_period" => $request->shipping_period,
            "shipping_carrier" => $request->shipping_carrier,
            "style_sheet" => $request->style_sheet,
            "customer_service_hours" => $request->customer_service_hours,
            "maximum_ticket_value" => $request->maximum_ticket_value,
            "created_by" => auth()->id(),
            "updated_by" => auth()->id(),
        ];

        $siteId=$request->site_id;

        if ($siteId) {

            unset($siteData["created_by"]);
            Site::where("id",$siteId)
                ->update($siteData);

        } else {
            $site = Site::create($siteData);
            $siteId=$site->id;
        }

        return response()->json([
            "message" => "Site Information Added Successfully",
            "data" => [
                "site_id" => $siteId,
            ]
        ], 200);
    }
}
