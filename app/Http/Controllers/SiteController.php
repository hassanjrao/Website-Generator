<?php

namespace App\Http\Controllers;

use App\Models\AboutUsDescription;
use App\Models\AboutUsTitle;
use App\Models\ButtonName;
use App\Models\ContactContent;
use App\Models\ContactTitle;
use App\Models\PopularTitle;
use App\Models\ShopTitle;
use App\Models\Site;
use App\Models\SiteContent;
use App\Models\Slogan;
use App\Models\TagLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

        $slogans = $this->getSlogans();
        $slogans = $slogans->map(function ($slogan) {

            return [
                "text" => $slogan->title,
                "value" => $slogan->id
            ];
        });

        $tagLines = $this->getTagLines();
        $tagLines = $tagLines->map(function ($tagLine) {

            return [
                "text" => $tagLine->title,
                "value" => $tagLine->id
            ];
        });

        $aboutUsTitles = $this->getAboutUsTitles();
        $aboutUsTitles = $aboutUsTitles->map(function ($aboutUsTitle) {

            return [
                "text" => $aboutUsTitle->title,
                "value" => $aboutUsTitle->id
            ];
        });

        $aboutUsContent = $this->getAboutUsContent();
        $aboutUsContent = $aboutUsContent->map(function ($aboutUsContent) {

            return [
                "text" => $aboutUsContent->description,
                "value" => $aboutUsContent->id
            ];
        });

        $shopTitles = $this->getShopTitles();
        $shopTitles = $shopTitles->map(function ($shopTitle) {

            return [
                "text" => $shopTitle->title,
                "value" => $shopTitle->id
            ];
        });

        $buttonNames = $this->getButtonNames();
        $buttonNames = $buttonNames->map(function ($buttonName) {
            return [
                "text" => $buttonName->title,
                "value" => $buttonName->id
            ];
        });

        $popularTitles = $this->getPopularTitles();
        $popularTitles = $popularTitles->map(function ($popularTitle) {
            return [
                "text" => $popularTitle->title,
                "value" => $popularTitle->id
            ];
        });

        $contactTitles = $this->getContactTitles();
        $contactTitles = $contactTitles->map(function ($contactTitle) {
            return [
                "text" => $contactTitle->title,
                "value" => $contactTitle->id
            ];
        });

        $contactContent = $this->getContactContent();
        $contactContent = $contactContent->map(function ($contactContent) {
            return [
                "text" => $contactContent->description,
                "value" => $contactContent->id
            ];
        });

        return view('sites.add_edit', compact('site', 'slogans', 'tagLines', 'aboutUsTitles', 'aboutUsContent', 'shopTitles', 'buttonNames', 'popularTitles', 'contactTitles', 'contactContent'));
    }

    public function getContactContent()
    {
        $contactContent = ContactContent::latest()->get();
        return $contactContent;
    }

    public function getContactTitles()
    {
        $contactTitles = ContactTitle::latest()->get();
        return $contactTitles;
    }

    public function getPopularTitles()
    {
        $popularTitles = PopularTitle::latest()->get();
        return $popularTitles;
    }

    public function getButtonNames()
    {
        $buttonNames = ButtonName::latest()->get();
        return $buttonNames;
    }

    public function getShopTitles()
    {
        $shopTitles = ShopTitle::latest()->get();
        return $shopTitles;
    }

    public function getTagLines()
    {
        $tagLines = TagLine::latest()->get();

        return $tagLines;
    }

    public function getSlogans()
    {

        $slogans = Slogan::latest()->get();
        return $slogans;
    }

    public function getAboutUsTitles()
    {
        $aboutUsTitles = AboutUsTitle::latest()->get();
        return $aboutUsTitles;
    }

    public function getAboutUsContent()
    {
        $aboutUsContent = AboutUsDescription::latest()->get();
        return $aboutUsContent;
    }

    public function createSite(Request $request)
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


        $siteData = [
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

        $siteId = $request->site_id;

        if ($siteId) {

            unset($siteData["created_by"]);
            Site::where("id", $siteId)
                ->update($siteData);
        } else {
            $site = Site::create($siteData);
            $siteId = $site->id;
        }

        return response()->json([
            "message" => "Site Information Added Successfully",
            "data" => [
                "site_id" => $siteId,
            ]
        ], 200);
    }

    public function submitSiteContent(Request $request)
    {

        $request->validate([
            "site_id" => "required|exists:sites,id",
            "slogan_id" => "required|exists:slogans,id",
            "tag_line_id" => "required|exists:tag_lines,id",
            "about_us_title_id" => "required|exists:about_us_titles,id",
            "about_us_content_id" => "required|exists:about_us_descriptions,id",
            "shop_title_id" => "required|exists:shop_titles,id",
            "button_name_id" => "required|exists:button_names,id",
            "popular_title_id" => "required|exists:popular_titles,id",
            "contact_title_id" => "required|exists:contact_titles,id",
            "contact_content_id" => "required|exists:contact_contents,id",
        ]);

        $siteContent = SiteContent::where("site_id", $request->site_id)->first();

        $contentData = [
            "site_id" => $request->site_id,
            "slogan_id" => $request->slogan_id,
            "tag_line_id" => $request->tag_line_id,
            "about_us_title_id" => $request->about_us_title_id,
            "about_us_description_id" => $request->about_us_content_id,
            "shop_title_id" => $request->shop_title_id,
            "button_name_id" => $request->button_name_id,
            "popular_title_id" => $request->popular_title_id,
            "contact_title_id" => $request->contact_title_id,
            "contact_content_id" => $request->contact_content_id,
        ];

        if ($siteContent) {
            $contentData["updated_by"] = auth()->id();
            $siteContent->update($contentData);
        } else {

            $contentData["created_by"] = auth()->id();
            $contentData["updated_by"] = auth()->id();
            $siteContent = SiteContent::create($contentData);
        }

        return response()->json([
            "message" => "Site Content Added Successfully",
            "data" => [
                "site_content_id" => $siteContent->id,
            ]
        ], 200);
    }

    public function download($site)
    {

        $site = Site::findorfail($site);

        $siteContent = $site->siteContent;


        // make new project
        $siteName = str_replace(' ', '_', $site->name);
        $randNum = rand(1000, 9999);
        $projectName = 'project_' . $site->id . '_' . $siteName . '_' . $randNum . '_' . time();

        $newProjectDestination= $this->copyProject($projectName);



        $siteInfofile = $newProjectDestination . '\bp_config\site-info.php';



        // open the file using the fopen() function

        $siteInfofile = fopen($siteInfofile, 'a') or die("can't open file");


        //Website Information
        $generalConfig =  [
            'brand_name' => $site->name,
            'website_url' => $site->url,
            'email' => $site->email,
            'descriptor' => $site->description,
            'corp_name' => $site->corp_name,
            'phone_number' => $site->phone_number,
            'address' => $site->address,
            'fulfillment' => $site->fulfillment,
            'return_address' => $site->return_address,

            'trial_period' => $site->trial_period,
            'trial_period_breakdown' => $site->trial_period_breakdown,
            'shipping_period' => $site->shipping_period,
            'shipping_carrier' => $site->shipping_carrier,
            'customer_service_hours' => $site->customer_service_hours,
            'add_stylesheet' => $site->style_sheet,
            'maximum_ticket_value' => $site->maximum_ticket_value,
            'naming_convention' => [    //this is the billing model name
                '1' => 'One Time Sale',              //this is for SS
                '2' => 'Trial',            //this is for trial
                '3' => 'Continuity'        //this is for continuity
            ],
            'product_count' => 0, //total products count
        ];




        //Website Content
        $updateContent = array(
            'slogan'        => $siteContent->slogan->title,
            'tagline'       => $siteContent->tagLine->title,
            'aboutUsTitle'  => $siteContent->aboutUsTitle->title,
            'aboutUs'       => $siteContent->aboutUsDescription->description,
            'shopTitle'     => $siteContent->shopTitle->title,
            'buttonName'    => $siteContent->buttonName->title,
            'popularTitle'  => $siteContent->popularTitle->title,
            'contactTitle'  => $siteContent->contactTitle->title,
            'contactContent'  => $siteContent->contactContent->description,
        );

        $generalConfig = var_export($generalConfig, true);
        $generalConfig = PHP_EOL . PHP_EOL . PHP_EOL . '$generalConfig = ' . $generalConfig . ';';

        $updateContent = var_export($updateContent, true);
        $updateContent = PHP_EOL . PHP_EOL . PHP_EOL . '$updateContent = ' . $updateContent . ';';

        fwrite($siteInfofile, $generalConfig);
        fwrite($siteInfofile, $updateContent);

        fclose($siteInfofile);







        $this->generateZip($site,$projectName,$newProjectDestination);



        // dd($site);/
    }

    public function copyProject($projectName)
    {

        // copy public/storage/project to public/storage/project{site_id}

        $source = public_path('storage\real-project');


        $destination = public_path('storage\projects\\' . $projectName);

        File::copyDirectory($source, $destination);

        // return path of the new project

        return $destination;

    }

    public function generateZip($site,$projectName,$newProjectDestination)
    {
        $siteName = str_replace(' ', '_', $site->name);

        $zip_file = "{$projectName}.zip";
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        // get real path for our folder

        $path = $newProjectDestination;



        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));

        foreach ($files as $name => $file) {

            // We're skipping all subfolders
            if (!$file->isDir()) {
                $filePath     = $file->getRealPath();

                // extracting filename with substr/strlen
                $relativePath = 'project/' . substr($filePath, strlen($path) + 1);

                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();

        // store the zip file in the storage folder
        Storage::put('zip-projects'.$zip_file, file_get_contents($zip_file));




        return response()->download($zip_file);
    }
}
