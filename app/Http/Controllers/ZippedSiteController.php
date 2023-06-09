<?php

namespace App\Http\Controllers;

use App\Jobs\SiteUploadJob;
use App\Models\CreditCard;
use App\Models\Site;
use App\Notifications\SiteUploadStartedNotification;
use App\Notifications\SiteUploadStatusNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ZippedSiteController extends Controller
{



    public function download($site, $generateZip = true)
    {

        try {

            $site = Site::findorfail($site);

            // website products
            $siteProductCategory = $site->siteProductCategory;



            $products = $siteProductCategory->productCategory->products()->with(['sizes'])->get();

            $siteProducts = [];
            foreach ($products as $ind =>  $product) {

                $productSizes = $product->sizes->pluck('name')->toArray();


                $pInd = $ind + 1;

                $siteProducts["product{$pInd}"] = [
                    'id' => $product->id,
                    'stickyId' => $product->sticky_id,
                    'name' => $product->name,
                    'description' => (string)$product->description,
                    'image' => 'products/' . $product->image,
                    'show_ingredients' => $product->show_ingredients == 1 ? 'yes' : 'no',
                    'ingredients_image' => $product->ingredients_image,
                    'category' => $product->productCategory->name,
                    'billingModel' => $product->billing_model_id,              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
                    'ssPrice' => $product->ss_price,               //if ss
                    'ssShipping' => $product->ss_shipping,             //if ss
                    'ssMaxqty' => $product->ss_max_quantity,                  // 1 for disable qty, 2 for enable qty
                    'trialPrice' => $product->trial_price,             //if trial
                    'trialShipping' => $product->trial_shipping,          //if trial
                    'trialRebillPrice' => $product->trial_rebill_price,       //Rebill price - if trial(after 14 days)
                    'trialMaxqty' => $product->trial_max_quantity,               // 1 for disable qty, 2 for enable qty
                    'continuityPrice' => $product->continuity_price,       //if continuity
                    'continuityShipping' => $product->continuity_shipping,     //if continuity
                    'continuityMaxqty' => $product->continuity_max_quantity,          // 1 for disable qty, 2 for enable qty
                    'straightSaleMultiPrice' => $product->straight_sale_multi_price == 1 ? 'yes' : 'no',  // if yes, only then it take price from below
                    'shop_option' => array(
                        'shop_option1' => array(
                            'option_quantity' => '1',
                            'option_price' => '4.99'
                        ),
                        'shop_option2' => array(
                            'option_quantity' => '3',
                            'option_price' => '13.99'
                        ),
                        'shop_option3' => array(
                            'option_quantity' => '5',
                            'option_price' => '19.99'
                        )
                    ),
                    'enableMaxqty' => $product->enable_max_quantity,               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
                    'sizeOption' => $product->size_option == 1 ? 'yes' : 'no',              //if yes then how size options in product page
                    'size_option' => $productSizes,
                    'status' => $product->status == 1 ? 'active' : 'inactive',               //if yes then how size options in product page
                ];
            }




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
                'product_count' => count($siteProducts),
            ];




            //Website Content
            $siteContent = $site->siteContent;
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



            // page config/ site template

            $siteTemplate = $site->siteTemplate()->with(["headerTemplate", "heroSection", "aboutSection", "productSection", "popularProductSection", "relatedProductSection", "ctaSection", "footerTemplate"])->first();
            $siteColorFont = $site->siteColorFont;
            $siteTermOther = $site->siteTermOther;
            $sitePageLayouts = $site->sitePageLayouts()->with('pageLayout')->get();

            $pageLayouts = [];
            foreach ($sitePageLayouts as $pageLayout) {
                $pageLayouts[] = $pageLayout->pageLayout->code;
            }





            $pageConfig =  [
                'header_template' => $siteTemplate->headerTemplate ? $siteTemplate->headerTemplate->file_name : '',
                'hero_section' => $siteTemplate->heroSection ? $siteTemplate->heroSection->file_name : '',
                'about_section' => $siteTemplate->aboutSection ? $siteTemplate->aboutSection->file_name : '',
                'product_section' => $siteTemplate->productSection ? $siteTemplate->productSection->file_name : '',
                'popularProducts_section' => $siteTemplate->popularProductSection ? $siteTemplate->popularProductSection->file_name : '',
                'relatedProducts_section' => $siteTemplate->relatedProductSection ? $siteTemplate->relatedProductSection->file_name : '',
                'cta_section' => $siteTemplate->ctaSection ? $siteTemplate->ctaSection->file_name : '',

                'contact_section' => $siteTemplate->contactSection ? $siteTemplate->contactSection->file_name : '',
                'features_section' => $siteTemplate->featureSection ? $siteTemplate->featureSection->file_name : '',
                'footer_template' => $siteTemplate->footerTemplate ? $siteTemplate->footerTemplate->file_name : '',

                'product_page' => $siteTemplate->productPage ? $siteTemplate->productPage->file_name : '',
                'checkout_page' => $siteTemplate->checkoutPage ? $siteTemplate->checkoutPage->file_name : '',

                'contact_page' => $siteTemplate->contactPage ? $siteTemplate->contactPage->file_name : '',
                'cart_page'=> $siteTemplate->cartPage ? $siteTemplate->cartPage->file_name : '',
                'navCart_template' => $siteTemplate->navigationPage ? $siteTemplate->navigationPage->file_name : '',


                // If you want to hide any section select 0

                'indexSectionsOrder' => $pageLayouts,

                'font' => $siteColorFont->font_family, // 1-Open Sans ; 2-Alegreya ; 3-Poppins ; 4-Roboto ; 5-Montserrat ; 6-Lato ; 7-Oswald ; 8-Raleway ;
                // 9-Mulish ; 10-Nunito ; 11-Assistant ; 12-Barlow ; 13-Rubik ; 14-Work Sans ; 15-Mukta

                // CSS Colors for theme using HEX or rgba (Can also write Transparent, white, red or basic colors)
                'primary_color' => $siteColorFont->primary_color,      //Accent Color on most elements like buttons bottom header
                'primary_text_color' => $siteColorFont->primary_text_color,    //Text to be used on Primary background color
                'secondary_color' => $siteColorFont->secondary_color,    //Elements which dont have primary color will use this
                'secondary_text_color' => $siteColorFont->secondary_text_color,  //Text to be used on secondary background color
                // Header Colors
                'topbar_bg_color' => $siteColorFont->top_bar_bg_color,
                'topbar_text_color' => $siteColorFont->top_bar_text_color,
                'header_bg_color' => $siteColorFont->header_bg_color,
                'header_text_color' => $siteColorFont->header_text_color,
                'header_icon_color' => $siteColorFont->header_icon_color,
                // Banner and Button Colors
                'banner_overly_color' => $siteColorFont->banner_overlay_color,
                'banner_text_color' => $siteColorFont->banner_text_color,
                'button_bg_color' => $siteColorFont->button_bg_color,
                'button_text_color' => $siteColorFont->button_text_color,
                'button_bg_color_hover' => $siteColorFont->button_hover_bg_color,
                'button_text_color_hover' => $siteColorFont->button_hover_text_color,
                // Footer Colors
                'footer_bg_color' => $siteColorFont->footer_bg_color,
                'footer_text_color' => $siteColorFont->footer_text_color,

                'displayCategory' => $siteTermOther->display_category == 1 ? 'yes' : 'no', //this toggles the category on the index and product page

                'displayBillingModel' => $siteTermOther->display_billing_model == 1 ? 'yes' : 'no', //this toggles the billing model on the index and product page

                'displayRelatedProducts' => $siteTermOther->display_related_products == 1  ? 'yes' : 'no', //this toggles the related products on the product page

                'onlyShowFirstPrice' => $siteTermOther->only_show_first_price == 1 ? 'yes' : 'no', //this only applies when the multi price is enabled. if set to 'yes' it will only show the first price from the array for the product on the index and shop page

                'creditCardIcons' => 4, // Icons set Pick between 1 - 4

                'loadingGif' => $siteTemplate->loading_gif_id, // Preloader Animation sitewide. Select from 1 - 10

                'sortProducts' => $siteTermOther->sort_product_by_id, //1 - alphabetical, 2 - reverse alphabetical, 3 - lowest to highest price, 4 - highest to lowest price, 5 - first to last product array, 6 - last to first product, 7 - shortest product name to longest product name, 8 - longest product name to shortest product name

                'showNavigationCart' => $siteTermOther->show_navigation_cart == 1  ? 'yes' : 'no', //yes displays it, no hides it

                'showBillingColumnCheckoutPage' => $siteTermOther->show_billing_column_checkout_page == 1 ? 'yes' : 'no', //yes displays it, no hides it

                'popularProducts' => [ //this toggles the popular products on the landing page
                    'displaypopularProducts' => $siteTermOther->show_popular_products == 1 ? 'yes' : 'no',
                    'popularProducts' => $siteTermOther->popular_products,
                ],

                'oneProductCartLimit' => $siteTermOther->one_product_cart_limit, //this limits one product in the shopping cart

                'shippingOption' => array(
                    'enableShippingOption' => $siteTermOther->shipping_option, //enables shipping option to checkout page and add description to terms page
                    'shippingOptionName' => $siteTermOther->shipping_name, //name that will be displayed in the checkout and terms page
                    'shippingOptionPrice' => $siteTermOther->shipping_price,   //price of the shipping option
                ),



                //Terms
                'checkoutPage' => array(
                    'require_generic_text_terms' => $siteTermOther->generic_terms == 1 ? 'yes' : "no",   //if set to no, then disable checkout page product terms checkboxes
                    'require_product_terms' => $siteTermOther->individual_product_terms == 1 ? 'yes' : "no",   //if set to no, then disable checkout page product terms checkboxes
                    'require_total_price_terms' => $siteTermOther->total_price_terms == 1 ? 'yes' : 'no'    //if set to no, then disable checkout page product terms checkboxes
                ),

                "contact_section_bg_image" => $siteTemplate->contact_section_bg_image,
                "product_section_bg_image" => $siteTemplate->product_section_bg_image,
                "cta_section_bg_image" => $siteTemplate->cta_section_bg_image,
                "hero_section_bg_image" => $siteTemplate->hero_section_bg_image,
                "hero_section_product_image" => $siteTemplate->hero_section_product_image,
            ];




            //Credit Card

            $siteCreditCardSet = $site->siteCreditCardSet;


            $creditCardSet = $siteCreditCardSet->creditCardSet;
            $creditCardSetItems = $creditCardSet->creditCardSetItems;

            // dd($creditCardSetItems);

            $card_type = array();

            foreach ($creditCardSetItems as $creditCardSetItem) {
                $card_type[strtolower($creditCardSetItem->name)] = 'yes';
            }





            //CRM settings

            $siteCrmSetting = $site->siteCrmSetting;
            $advertisingCompany = $siteCrmSetting->advertisingCompany;
            $siteCRM=$siteCrmSetting->crm;

            // dd($advertisingCompany);
            $CRM = [
                'url'                       => $siteCRM->url,
                'username'                  => $siteCRM->username,
                'password'                  => $siteCRM->password,
                'shippingId'                => $siteCRM->shipping_id,
                'campaignId'                => $siteCRM->compaign_id,
                'tranType'                  => $siteCRM->tran_type,
                'offerId'                   => $siteCRM->offer_id,
                'billingModelId'            => $siteCRM->billing_model_id,
                'gatewayId'                 => $siteCRM->gateway_id,

                //'shippingInsurancePrice'    => 1.00,
                //'shippingInsuranceProductId'=> 123
            ];



            // make new project
            $siteName = str_replace(' ', '_', $site->name);
            $randNum = rand(1000, 9999);
            $projectName = $siteName."_".$site->id;

            $newProjectDestination = $this->copyProject($projectName);


            // add product images
            $productImagesFiles = [];
            foreach ($products as $product) {
                $productImagesFiles[] = "product" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . $product->image;
            }
            $this->addFiles($newProjectDestination . DIRECTORY_SEPARATOR . 'bp_config' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'products', $productImagesFiles);


            $templateBasePath=$newProjectDestination . DIRECTORY_SEPARATOR . 'bp_config' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;

            // add header template file
            if ($siteTemplate->headerTemplate) {
                $headerFile = [$siteTemplate->headerTemplate->file];
                $this->addFiles($templateBasePath . 'headers', $headerFile);
            }


            // add footer template file
            if ($siteTemplate->footerTemplate) {
                $footerFile = [$siteTemplate->footerTemplate->file];


                $this->addFiles($templateBasePath . 'footer', $footerFile);
            }

            // add hero section template file
            if ($siteTemplate->heroSection) {
                $heroSectionFile = [$siteTemplate->heroSection->file];
                $this->addFiles($templateBasePath . 'hero_section_templates', $heroSectionFile);
            }

            // add about section template file
            if ($siteTemplate->aboutSection) {
                $aboutSectionFile = [$siteTemplate->aboutSection->file];
                $this->addFiles($templateBasePath . 'about_templates', $aboutSectionFile);
            }

            // add product section template file
            if ($siteTemplate->productSection) {
                $productSectionFile = [$siteTemplate->productSection->file];
                $this->addFiles($templateBasePath . 'product_section_templates', $productSectionFile);
            }

            // add related products section template file
            if ($siteTemplate->relatedProductSection) {
                $relatedProductsSectionFile = [$siteTemplate->relatedProductSection->file];
                $this->addFiles($templateBasePath . 'related_products_templates', $relatedProductsSectionFile);
            }

            // add popular products section template file
            if ($siteTemplate->popularProductSection) {
                $popularProductsSectionFile = [$siteTemplate->popularProductSection->file];
                $this->addFiles($templateBasePath . 'popular_section_templates', $popularProductsSectionFile);
            }

            // add cta section template file
            if ($siteTemplate->ctaSection) {
                $ctaSectionFile = [$siteTemplate->ctaSection->file];
                $this->addFiles($templateBasePath . 'cta_templates', $ctaSectionFile);
            }

            // add contact section template file
            if ($siteTemplate->contactSection) {
                $contactSectionFile = [$siteTemplate->contactSection->file];
                $this->addFiles($templateBasePath . 'contact_templates', $contactSectionFile);
            }

            // add features section template file
            if ($siteTemplate->featureSection) {
                $featuresSectionFile = [$siteTemplate->featureSection->file];
                $this->addFiles($templateBasePath . 'features_templates', $featuresSectionFile);
            }

            // add product page template file
            if ($siteTemplate->productPage) {
                $productPageFile = [$siteTemplate->productPage->file];
                $this->addFiles($templateBasePath . 'product_page_templates', $productPageFile);
            }

            // add checkout page template file
            if ($siteTemplate->checkoutPage) {
                $checkoutPageFile = [$siteTemplate->checkoutPage->file];
                $this->addFiles($templateBasePath . 'checkout_page_templates', $checkoutPageFile);
            }

            // add contact page template file
            if ($siteTemplate->contactPage) {
                $contactPageFile = [$siteTemplate->contactPage->file];
                $this->addFiles($templateBasePath . 'contact_page_templates', $contactPageFile);
            }

            // add checkout page template file
            if ($siteTemplate->cartPage) {
                $cartPageFile = [$siteTemplate->cartPage->file];
                $this->addFiles($templateBasePath . 'cart_page_templates', $cartPageFile);
            }

            // add checkout page template file
            if ($siteTemplate->navigationPage) {
                $navigationPageFile = [$siteTemplate->navigationPage->file];
                $this->addFiles($templateBasePath . 'nav_cart_templates', $navigationPageFile);
            }


            $siteImages = [];

            if ($siteTemplate->about_section_id) {

                foreach($site->siteAboutSectionImages as $ind=> $siteAboutSectionImage){

                    $path=$siteAboutSectionImage->image;
                    $pathArr=explode('/',$path);
                    $name=end($pathArr);


                    $pageConfigInd='about_section_bg_image'.$ind +1;
                    $pageConfig[$pageConfigInd]=$name;



                    $siteImages[] = [
                        "path" => $path,
                        "name" => $name,
                    ];

                }


            }


            if ($siteTemplate->cta_section_bg_image) {
                $siteImages[] = [
                    "path" => "site-sections" . DIRECTORY_SEPARATOR . "cta" . DIRECTORY_SEPARATOR . $siteTemplate->cta_section_bg_image,
                    "name" => $siteTemplate->cta_section_bg_image,
                ];
            }

            if ($siteTemplate->contact_section_bg_image) {
                $siteImages[] = [
                    "path" => "site-sections" . DIRECTORY_SEPARATOR . "contact" . DIRECTORY_SEPARATOR . $siteTemplate->contact_section_bg_image,
                    "name" => $siteTemplate->contact_section_bg_image,
                ];
            }

            if ($siteTemplate->hero_section_bg_image) {
                $siteImages[] = [
                    "path" => "site-sections" . DIRECTORY_SEPARATOR . "hero" . DIRECTORY_SEPARATOR . $siteTemplate->hero_section_bg_image,
                    "name" => $siteTemplate->hero_section_bg_image
                ];
            }


            if ($siteTemplate->hero_section_product_image) {
                $siteImages[] = [
                    "path" => "site-sections" . DIRECTORY_SEPARATOR . "hero" . DIRECTORY_SEPARATOR . $siteTemplate->hero_section_product_image,
                    "name" => $siteTemplate->hero_section_product_image
                ];
            }

            if ($siteTemplate->product_section_bg_image) {
                $siteImages[] = [
                    "path" => "site-sections" . DIRECTORY_SEPARATOR . "product" . DIRECTORY_SEPARATOR . $siteTemplate->product_section_bg_image,
                    "name" => $siteTemplate->product_section_bg_image,
                ];
            }

            // dd($siteImages);

            $this->addTemplateImages($newProjectDestination . DIRECTORY_SEPARATOR . 'img', $siteImages);





            $siteInfofile = $newProjectDestination . DIRECTORY_SEPARATOR . 'bp_config' . DIRECTORY_SEPARATOR . 'site-info.php';


            $this->writeInFile($siteInfofile, [
                'generalConfig' => $generalConfig,
                'products' => $siteProducts,
                'updateContent' => $updateContent,
                'pageConfig' => $pageConfig,
                'card_type' => $card_type,
                'CRM' => $CRM,
            ]);


            if (!$generateZip) {
                return $newProjectDestination;
            }


            return $this->generateZip($site, $projectName, $newProjectDestination);
        } catch (\Exception $e) {

            return redirect()->back()->with('errors', $e->getMessage());
        }



        // dd($site);/
    }







    public function writeInFile($file, $dataArrays = [])
    {


        // open the file using the fopen() function

        $siteInfofile = fopen($file, 'a') or die("can't open file");

        foreach ($dataArrays as $key => $data) {
            $data = var_export($data, true);
            $data = PHP_EOL . PHP_EOL . PHP_EOL . '$' . $key . ' = ' . $data . ';';
            fwrite($siteInfofile, $data);
        }

        // also at the end of the file write require 'design_and_ajax.php';

        $data = PHP_EOL . PHP_EOL . PHP_EOL . 'require \'design_and_ajax.php\';';

        fwrite($siteInfofile, $data);



        fclose($siteInfofile);
    }


    public function copyProject($projectName)
    {


        // copy public/storage/project to public/storage/project{site_id}

        $source = public_path('real-project-upd');

        $destination = public_path('storage' . DIRECTORY_SEPARATOR . 'projects' . DIRECTORY_SEPARATOR . $projectName);

        File::copyDirectory($source, $destination);

        // return path of the new project

        return $destination;
    }

    public function addFiles($destinationFolder, $filePaths = [])
    {
        foreach ($filePaths as $filePath) {
            $filePath = public_path('storage' . DIRECTORY_SEPARATOR . $filePath);


            // dd($filePath, $destinationFolder.'/4kmCP45l4trRW9eL6ALJ6wfmSa8JdScPXLO9GtUX.jpg');

            copy($filePath, $destinationFolder . DIRECTORY_SEPARATOR . basename($filePath));
        }
    }

    public function addTemplateImages($destinationFolder, $filePaths = [])
    {
        foreach ($filePaths as $filePathArr) {
            $filePath = public_path('storage' . DIRECTORY_SEPARATOR . $filePathArr["path"]);


            // $fileExt = pathinfo($filePath, PATHINFO_EXTENSION);


            // dd($filePath, $destinationFolder.'/4kmCP45l4trRW9eL6ALJ6wfmSa8JdScPXLO9GtUX.jpg');

            copy($filePath, $destinationFolder . DIRECTORY_SEPARATOR . $filePathArr["name"]);

        }
    }

    public function generateZip($site, $projectName, $newProjectDestination)
    {

        $zip_file = "{$projectName}.zip";
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        // get real path for our folder

        $path = $newProjectDestination;

        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));

        foreach ($files as $name => $file) {

            // We're skipping all subfolders
            if (!$file->isDir()) {
                $filePath     = $file->getRealPath();;


                // extracting filename with substr/strlen
                $relativePath =  substr($filePath, strlen($path) + 1);


                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();

        $contents = file_get_contents($zip_file);

        return response()->streamDownload(function () use ($contents) {
            echo $contents;
        }, $zip_file, ['Content-Type: application/zip']);
    }

    public function uploadToServer(Request $request)
    {

        $request->validate([
            "site_id" => "required|exists:sites,id",
            "host_name" => "required",
            "username" => "required",
            "password" => "required",
            "root_path" => "required",
        ]);

        // if root_path do not contains forward slash, add it
        if (substr($request->root_path, 0, 1) != '/') {
            $request->root_path = '/' . $request->root_path;
        }


        $serverDetails = [
            'driver' => 'ftp',
            'host' => $request->host_name,
            'username' => $request->username,
            'password' => $request->password,
            'root' => $request->root_path,
            // 'port' => 21,
            'timout' => 30,
        ];

        // $serverDetails = [
        //     'driver' => 'ftp',
        //     'host' => 'ftp.yagaskilz.com',
        //     'username' => 'hsn2@yagaskilz.com',
        //     'password' => 'BHa9U8gNIA=A',
        //     'root' => '/sites',
        //     // 'port' => 21,
        //     'timout' => 30,
        // ];


        $path = $this->download($request->site_id, false);

        $site=Site::find($request->site_id);

        auth()->user()->notify(new SiteUploadStartedNotification($site));


        SiteUploadJob::dispatch($path,$serverDetails,auth()->user(),$site);


        return response()->json([
            "message" => "Site is being uploaded to the server",
        ],200);
    }


    public function previewSite($site_id){


        $path = $this->download($site_id, false);

        $pathArr=explode(DIRECTORY_SEPARATOR,$path);

        $projectName=end($pathArr);

        $redirectUrl=config("app.url")."/storage/projects/{$projectName}/index.php";


        return redirect()->to($redirectUrl);

    }
}
