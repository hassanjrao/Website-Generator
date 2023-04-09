<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\AboutUsDescription;
use App\Models\AboutUsTitle;
use App\Models\ButtonName;
use App\Models\CheckoutPage;
use App\Models\ContactContent;
use App\Models\ContactSection;
use App\Models\ContactTitle;
use App\Models\CreditCard;
use App\Models\CtaSection;
use App\Models\FeatureSection;
use App\Models\FooterTemplate;
use App\Models\HeaderTemplate;
use App\Models\HeroSection;
use App\Models\LoadingGif;
use App\Models\PopularProductSection;
use App\Models\PopularTitle;
use App\Models\ProductPage;
use App\Models\ProductSection;
use App\Models\RelatedProductSection;
use App\Models\ShopTitle;
use App\Models\Site;
use App\Models\SiteColorFont;
use App\Models\SiteContent;
use App\Models\SiteCreditCard;
use App\Models\SiteTemplate;
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

        $headerTemplates = $this->headerTemplates();
        $headerTemplates = $headerTemplates->map(function ($headerTemplate) {
            return [
                "text" => $headerTemplate->name,
                "value" => $headerTemplate->id
            ];
        });

        $heroSections = $this->getHeroSections();
        $heroSections = $heroSections->map(function ($heroSection) {
            return [
                "text" => $heroSection->name,
                "value" => $heroSection->id
            ];
        });


        $productSections = $this->getProductSections();
        $productSections = $productSections->map(function ($productSection) {
            return [
                "text" => $productSection->name,
                "value" => $productSection->id
            ];
        });


        $aboutSections = $this->getAboutSections();
        $aboutSections = $aboutSections->map(function ($aboutSection) {
            return [
                "text" => $aboutSection->name,
                "value" => $aboutSection->id
            ];
        });

        $contactSections = $this->getContactSections();
        $contactSections = $contactSections->map(function ($contactSection) {
            return [
                "text" => $contactSection->name,
                "value" => $contactSection->id
            ];
        });

        $popularProductSections = $this->getPopularProductSections();
        $popularProductSections = $popularProductSections->map(function ($popularProductSection) {
            return [
                "text" => $popularProductSection->name,
                "value" => $popularProductSection->id
            ];
        });

        $ctaSections = $this->getCtaSections();
        $ctaSections = $ctaSections->map(function ($ctaSection) {
            return [
                "text" => $ctaSection->name,
                "value" => $ctaSection->id
            ];
        });

        $featureSections = $this->getFeatureSections();
        $featureSections = $featureSections->map(function ($featureSection) {
            return [
                "text" => $featureSection->name,
                "value" => $featureSection->id
            ];
        });

        $footerTemplates = $this->getFooterTemplates();
        $footerTemplates = $footerTemplates->map(function ($footerTemplate) {
            return [
                "text" => $footerTemplate->name,
                "value" => $footerTemplate->id
            ];
        });

        $productPages = $this->getProductPages();
        $productPages = $productPages->map(function ($productPage) {
            return [
                "text" => $productPage->name,
                "value" => $productPage->id
            ];
        });

        $checkoutPages = $this->getCheckoutPages();
        $checkoutPages = $checkoutPages->map(function ($checkoutPage) {
            return [
                "text" => $checkoutPage->name,
                "value" => $checkoutPage->id
            ];
        });

        $relatedProductSections = $this->getRelatedProductSections();
        $relatedProductSections = $relatedProductSections->map(function ($relatedProductSection) {
            return [
                "text" => $relatedProductSection->name,
                "value" => $relatedProductSection->id
            ];
        });

        $layouts = $this->getLayouts();
        $layouts = json_encode($layouts);


        $loadingGifs = $this->getLoadingGifs();
        $loadingGifs = json_encode($loadingGifs);

        $colors = $this->getSiteColors();
        $colors = json_encode($colors);

        $fontFamilies = $this->getSiteFonts();
        $fontFamilies = json_encode($fontFamilies);

        $creditCards = $this->getCreditCards();
        $creditCards = json_encode($creditCards);


        return view('sites.add_edit',
            compact(
                'site',
                'slogans',
                'tagLines',
                'aboutUsTitles',
                'aboutUsContent',
                'shopTitles',
                'buttonNames',
                'popularTitles',
                'contactTitles',
                'contactContent',
                'headerTemplates',
                'heroSections',
                'productSections',
                'aboutSections',
                'contactSections',
                'popularProductSections',
                'ctaSections',
                'featureSections',
                'footerTemplates',
                'productPages',
                'checkoutPages',
                'relatedProductSections',
                'layouts',
                'loadingGifs',
                'colors',
                'fontFamilies',
                'creditCards'
            )
        );
    }

    public function getCreditCards()
    {
        $creditCards = CreditCard::all();

        $creditCards = $creditCards->map(function ($creditCard) {
            return [
                "id" => $creditCard->id,
                "name" => $creditCard->name,
                "image" => Storage::url("uploads/credit-cards/" . $creditCard->image)
            ];
        });

        return $creditCards;
    }

    public function getSiteColors()
    {

        $colors = [

            [
                'label' => 'Primary Color',
                'name' => 'primary_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Primary Text Color',
                'name' => 'primary_text_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Secondary Color',
                'name' => 'secondary_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Secondary Text Color',
                'name' => 'secondary_text_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Top bar BG Color',
                'name' => 'top_bar_bg_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Top bar Text Color',
                'name' => 'top_bar_text_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Header BG Color',
                'name' => 'header_bg_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Header Text Color',
                'name' => 'header_text_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Header Icon Color',
                'name' => 'header_icon_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Banner Overlay Color',
                'name' => 'banner_overlay_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Banner Text Color',
                'name' => 'banner_text_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Button BG Color',
                'name' => 'button_bg_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Button Text Color',
                'name' => 'button_text_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Button Hover BG Color',
                'name' => 'button_hover_bg_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Button Hover Text Color',
                'name' => 'button_hover_text_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Footer BG Color',
                'name' => 'footer_bg_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Footer Text Color',
                'name' => 'footer_text_color',
                'value' => '#000000'
            ]
        ];

        return $colors;
    }

    public function getSiteFonts()
    {


        // 1-Open Sans ; 2-Alegreya ; 3-Poppins ; 4-Roboto ; 5-Montserrat ; 6-Lato ; 7-Oswald ; 8-Raleway ;
        // 9-Mulish ; 10-Nunito ; 11-Assistant ; 12-Barlow ; 13-Rubik ; 14-Work Sans ; 15-Mukta

        $fontFamilies = [
            [
                "text" => "Open Sans",
                "value" => 1
            ],
            [
                "text" => "Alegreya",
                "value" => 2
            ],
            [
                "text" => "Poppins",
                "value" => 3
            ],
            [
                "text" => "Roboto",
                "value" => 4
            ],
            [
                "text" => "Montserrat",
                "value" => 5
            ],
            [
                "text" => "Lato",
                "value" => 6
            ],
            [
                "text" => "Oswald",
                "value" => 7
            ],
            [
                "text" => "Raleway",
                "value" => 8
            ],
            [
                "text" => "Mulish",
                "value" => 9
            ],
            [
                "text" => "Nunito",
                "value" => 10
            ],
            [
                "text" => "Assistant",
                "value" => 11
            ],
            [
                "text" => "Barlow",
                "value" => 12
            ],
            [
                "text" => "Rubik",
                "value" => 13
            ],
            [
                "text" => "Work Sans",
                "value" => 14
            ],
            [
                "text" => "Mukta",
                "value" => 15
            ],
        ];

        return $fontFamilies;
    }

    public function getLayouts()
    {
        $layouts = [
            [
                "id" => 1,
                "name" => "Header",
                "fixed" => true,
            ],
            [
                "id" => 2,
                "name" => "Hero Section",
            ],
            [
                "id" => 3,
                "name" => "About Section",
            ],
            [
                "id" => 4,
                "name" => "Product Section",
            ],

            [
                "id" => 5,
                "name" => "Featured Products",
            ],

            [
                "id" => 6,
                "name" => "Contact",
            ],

            [
                "id" => 7,
                "name" => "Footer",
                "fixed" => true,
            ],

        ];

        return $layouts;
    }

    public function getLoadingGifs()
    {
        $loadingGifs = LoadingGif::all();

        $loadingGifs = $loadingGifs->map(function ($loadingGif) {
            return [
                "id" => $loadingGif->id,
                "image" => asset('media/loading-gifs/' . $loadingGif->image),
            ];
        });

        return $loadingGifs;
    }

    public function getRelatedProductSections()
    {
        $relatedProductSections = RelatedProductSection::all();
        return $relatedProductSections;
    }

    public function getCheckoutPages()
    {
        $checkoutPages = CheckoutPage::all();
        return $checkoutPages;
    }

    public function getProductPages()
    {
        $productPages = ProductPage::all();
        return $productPages;
    }

    public function getFooterTemplates()
    {
        $footerTemplates = FooterTemplate::all();
        return $footerTemplates;
    }

    public function getFeatureSections()
    {
        $featureSections = FeatureSection::all();
        return $featureSections;
    }

    public function getCtaSections()
    {
        $ctaSections = CtaSection::all();
        return $ctaSections;
    }


    public function getPopularProductSections()
    {
        $popularProductSections = PopularProductSection::all();
        return $popularProductSections;
    }

    public function getContactSections()
    {
        $contactSections = ContactSection::all();
        return $contactSections;
    }

    public function getAboutSections()
    {
        $aboutSections = AboutSection::all();
        return $aboutSections;
    }

    public function getProductSections()
    {
        $productSections = ProductSection::all();
        return $productSections;
    }

    public function getHeroSections()
    {
        $heroSections = HeroSection::all();
        return $heroSections;
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

    public function headerTemplates()
    {
        $headerTemplates = HeaderTemplate::all();
        return $headerTemplates;
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


    public function submitSiteTemplate(Request $request)
    {

        $request->validate([
            "site_id" => "required|exists:sites,id",
            "header_template_id" => "required|exists:header_templates,id",
            "hero_section_id" => "required|exists:hero_sections,id",
            "product_section_id" => "required|exists:product_sections,id",
            "related_product_section_id" => "required|exists:related_product_sections,id",
            "about_section_id" => "required|exists:about_sections,id",
            "contact_section_id" => "required|exists:contact_sections,id",
            "popular_product_section_id" => "required|exists:popular_product_sections,id",
            "cta_section_id" => "required|exists:cta_sections,id",
            "feature_section_id" => "required|exists:feature_sections,id",
            "footer_template_id" => "required|exists:footer_templates,id",
            "product_page_id" => "required|exists:product_pages,id",
            "checkout_page_id" => "required|exists:checkout_pages,id",
        ]);


        $siteTemplateData = [
            "site_id" => $request->site_id,
            "header_template_id" => $request->header_template_id,
            "hero_section_id" => $request->hero_section_id,
            "product_section_id" => $request->product_section_id,
            "related_product_section_id" => $request->related_product_section_id,
            "about_section_id" => $request->about_section_id,
            "contact_section_id" => $request->contact_section_id,
            "popular_product_section_id" => $request->popular_product_section_id,
            "cta_section_id" => $request->cta_section_id,
            "feature_section_id" => $request->feature_section_id,
            "footer_template_id" => $request->footer_template_id,
            "product_page_id" => $request->product_page_id,
            "checkout_page_id" => $request->checkout_page_id,
            "loading_gif_id" => 1
        ];


        $siteTemplate = SiteTemplate::where("site_id", $request->site_id)->first();

        if ($siteTemplate) {
            $siteTemplate->update($siteTemplateData);
        } else {
            $siteTemplate = SiteTemplate::create($siteTemplateData);
        }

        return response()->json([
            "message" => "Site Template Added Successfully",
            "data" => [
                "site_template_id" => $siteTemplate->id,
            ]
        ], 200);
    }


    public function submitSiteLoadingGif(Request $request)
    {

        $request->validate([
            "site_id" => "required|exists:sites,id",
            "loading_gif_id" => "required|exists:loading_gifs,id",
        ]);


        SiteTemplate::where("site_id", $request->site_id)->update([
            "loading_gif_id" => $request->loading_gif_id
        ]);

        return response()->json([
            "message" => "Loading Gif Updated Successfully",

        ], 200);
    }


    public function submitSiteColorFont(Request $request)
    {
        $request->validate([
            "site_id" => "required|exists:sites,id",
            "font_family" => "required",
            "colors_fonts"=>"required",
        ]);

        $colors_fonts = $request->colors_fonts;

        $colorFontData=[
            "site_id" => $request->site_id,
            "font_family" => $request->font_family,
            "primary_color" => $colors_fonts[0]["value"],
            "primary_text_color" => $colors_fonts[1]["value"],
            "secondary_color" => $colors_fonts[2]["value"],
            "secondary_text_color" => $colors_fonts[3]["value"],
            "top_bar_bg_color" => $colors_fonts[4]["value"],
            "top_bar_text_color" => $colors_fonts[5]["value"],
            "header_bg_color" => $colors_fonts[6]["value"],
            "header_text_color" => $colors_fonts[7]["value"],
            "header_icon_color" => $colors_fonts[8]["value"],
            "banner_overlay_color" => $colors_fonts[9]["value"],
            "banner_text_color" => $colors_fonts[10]["value"],
            "button_bg_color" => $colors_fonts[11]["value"],
            "button_text_color" => $colors_fonts[12]["value"],
            "button_hover_bg_color" => $colors_fonts[13]["value"],
            "button_hover_text_color" => $colors_fonts[14]["value"],
            "footer_bg_color" => $colors_fonts[15]["value"],
            "footer_text_color" => $colors_fonts[16]["value"],
        ];

        $siteColorFont = SiteColorFont::where("site_id", $request->site_id)->first();

        if ($siteColorFont) {
            $siteColorFont->update($colorFontData);
        } else {
            $siteColorFont = SiteColorFont::create($colorFontData);
        }

        return response()->json([
            "message" => "Site Color Font Added Successfully",
            "data" => [
                "site_color_font_id" => $siteColorFont->id,
            ]
        ], 200);


    }


    public function submitSiteCreditCard(Request $request)
    {

        $request->validate([
            "site_id" => "required|exists:sites,id",
            "credit_card_ids" => "required|array",
            "credit_card_ids.*" => "required|exists:credit_cards,id",
        ]);


        $creditCardData=[];

        foreach ($request->credit_card_ids as $creditCardId) {
            $creditCardData[]=[
                "site_id" => $request->site_id,
                "credit_card_id" => $creditCardId,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        SiteCreditCard::where("site_id", $request->site_id)->delete();

        SiteCreditCard::insert($creditCardData);


        return response()->json([
            "message" => "Credit Cards Added Successfully",

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

        $newProjectDestination = $this->copyProject($projectName);



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







        $this->generateZip($site, $projectName, $newProjectDestination);



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

    public function generateZip($site, $projectName, $newProjectDestination)
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
        Storage::put('zip-projects' . $zip_file, file_get_contents($zip_file));




        return response()->download($zip_file);
    }
}
