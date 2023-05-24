<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\AboutUsDescription;
use App\Models\AboutUsTitle;
use App\Models\AdvertisingCompany;
use App\Models\ButtonName;
use App\Models\CheckoutPage;
use App\Models\ContactContent;
use App\Models\ContactSection;
use App\Models\ContactTitle;
use App\Models\CreditCardSet;
use App\Models\CtaSection;
use App\Models\FeatureSection;
use App\Models\FooterTemplate;
use App\Models\HeaderTemplate;
use App\Models\HeroSection;
use App\Models\LoadingGif;
use App\Models\PageLayout;
use App\Models\PopularProductSection;
use App\Models\PopularTitle;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPage;
use App\Models\ProductSection;
use App\Models\RelatedProductSection;
use App\Models\ShopTitle;
use App\Models\Site;
use App\Models\SiteColorFont;
use App\Models\SiteContent;
use App\Models\SiteCreditCard;
use App\Models\SiteCrmSetting;
use App\Models\SitePageLayout;
use App\Models\SiteProductCategory;
use App\Models\SiteTemplate;
use App\Models\SiteTermOther;
use App\Models\Slogan;
use App\Models\SortProductBy;
use App\Models\TagLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function index()
    {

        if (auth()->user()->can('view sites') == false) {
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }


        $sites = Site::latest()
            ->with(['createdBy', 'updatedBy'])
            ->get();

        return view('sites.index', compact('sites'));
    }

    public function create()
    {

        if (auth()->user()->can('create sites') == false) {
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

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

        $sortProductsBy = $this->getSortProductsBy();
        $sortProductsBy = $sortProductsBy->map(function ($sortProductBy) {
            return [
                "text" => $sortProductBy->name,
                "value" => $sortProductBy->id
            ];
        });

        $advertisingCompanies = $this->getAdvertisingCompanies();
        $advertisingCompanies = $advertisingCompanies->map(function ($advertisingCompany) {
            return [
                "text" => $advertisingCompany->name,
                "value" => $advertisingCompany->id,
                'url' => $advertisingCompany->url,
                'username' => $advertisingCompany->username,
                'password' => $advertisingCompany->password,
                'shipping_id' => $advertisingCompany->shipping_id,
                'compaign_id' => $advertisingCompany->compaign_id,
                'tran_type' => $advertisingCompany->tran_type,
                'offer_id' => $advertisingCompany->offer_id,
                'billing_model_id' => $advertisingCompany->billing_model_id,
                'gateway_id' => $advertisingCompany->gateway_id,
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


        $totalProducts = Product::all()->count();


        // $totalProducts = Prod;

        $site = 0;


        return view(
            'sites.add_edit',
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
                'creditCards',
                'sortProductsBy',
                'advertisingCompanies',
                'totalProducts'
            )
        );
    }

    public function edit($id)
    {

        $site = Site::findOrFail($id);

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

        $siteTemplate=$site->siteTemplate;

        $headerTemplates = $this->headerTemplates();
        $headerTemplates = $headerTemplates->map(function ($headerTemplate) use ($siteTemplate) {
            return [
                "text" => $headerTemplate->name,
                "value" => $headerTemplate->id,
                "selected" => $headerTemplate->id == $siteTemplate->header_template_id ? true : false
            ];
        });

        $heroSections = $this->getHeroSections();
        $heroSections = $heroSections->map(function ($heroSection) use ($siteTemplate) {
            return [
                "text" => $heroSection->name,
                "value" => $heroSection->id,
                'selected' => $heroSection->id == $siteTemplate->hero_section_id ? true : false
            ];
        });


        $productSections = $this->getProductSections();
        $productSections = $productSections->map(function ($productSection) use ($siteTemplate) {
            return [
                "text" => $productSection->name,
                "value" => $productSection->id,
                'selected' => $productSection->id == $siteTemplate->product_section_id ? true : false
            ];
        });


        $aboutSections = $this->getAboutSections();
        $aboutSections = $aboutSections->map(function ($aboutSection) use ($siteTemplate) {
            return [
                "text" => $aboutSection->name,
                "value" => $aboutSection->id,
                'selected' => $aboutSection->id == $siteTemplate->about_section_id ? true : false
            ];
        });

        $contactSections = $this->getContactSections();
        $contactSections = $contactSections->map(function ($contactSection) use ($siteTemplate) {
            return [
                "text" => $contactSection->name,
                "value" => $contactSection->id,
                'selected' => $contactSection->id == $siteTemplate->contact_section_id ? true : false
            ];
        });

        $popularProductSections = $this->getPopularProductSections();
        $popularProductSections = $popularProductSections->map(function ($popularProductSection) use ($siteTemplate) {
            return [
                "text" => $popularProductSection->name,
                "value" => $popularProductSection->id,
                'selected' => $popularProductSection->id == $siteTemplate->popular_product_section_id ? true : false
            ];
        });

        $ctaSections = $this->getCtaSections();
        $ctaSections = $ctaSections->map(function ($ctaSection) use ($siteTemplate) {
            return [
                "text" => $ctaSection->name,
                "value" => $ctaSection->id,
                'selected' => $ctaSection->id == $siteTemplate->cta_section_id ? true : false
            ];
        });

        $featureSections = $this->getFeatureSections();
        $featureSections = $featureSections->map(function ($featureSection) use ($siteTemplate) {
            return [
                "text" => $featureSection->name,
                "value" => $featureSection->id,
                'selected' => $featureSection->id == $siteTemplate->feature_section_id ? true : false
            ];
        });

        $footerTemplates = $this->getFooterTemplates();
        $footerTemplates = $footerTemplates->map(function ($footerTemplate) use ($siteTemplate) {
            return [
                "text" => $footerTemplate->name,
                "value" => $footerTemplate->id,
                'selected' => $footerTemplate->id == $siteTemplate->footer_template_id ? true : false
            ];
        });

        $productPages = $this->getProductPages();
        $productPages = $productPages->map(function ($productPage) use ($siteTemplate) {
            return [
                "text" => $productPage->name,
                "value" => $productPage->id,
                'selected' => $productPage->id == $siteTemplate->product_page_id ? true : false
            ];
        });

        $checkoutPages = $this->getCheckoutPages();
        $checkoutPages = $checkoutPages->map(function ($checkoutPage) use ($siteTemplate) {
            return [
                "text" => $checkoutPage->name,
                "value" => $checkoutPage->id,
                'selected' => $checkoutPage->id == $siteTemplate->checkout_page_id ? true : false
            ];
        });

        $relatedProductSections = $this->getRelatedProductSections();
        $relatedProductSections = $relatedProductSections->map(function ($relatedProductSection) use ($siteTemplate) {
            return [
                "text" => $relatedProductSection->name,
                "value" => $relatedProductSection->id,
                'selected' => $relatedProductSection->id == $siteTemplate->related_product_section_id ? true : false
            ];
        });

        $sortProductsBy = $this->getSortProductsBy();
        $sortProductsBy = $sortProductsBy->map(function ($sortProductBy)  {
            return [
                "text" => $sortProductBy->name,
                "value" => $sortProductBy->id
            ];
        });

        $siteProductCategory = $site->siteProductCategory;

        $advertisingCompanies = $this->getAdvertisingCompanies();
        $advertisingCompanies = $advertisingCompanies->map(function ($advertisingCompany) use ($siteProductCategory) {
            return [
                "text" => $advertisingCompany->name,
                "value" => $advertisingCompany->id,
                'url' => $advertisingCompany->url,
                'username' => $advertisingCompany->username,
                'password' => $advertisingCompany->password,
                'shipping_id' => $advertisingCompany->shipping_id,
                'compaign_id' => $advertisingCompany->compaign_id,
                'tran_type' => $advertisingCompany->tran_type,
                'offer_id' => $advertisingCompany->offer_id,
                'billing_model_id' => $advertisingCompany->billing_model_id,
                'gateway_id' => $advertisingCompany->gateway_id,
                "selected" => $advertisingCompany->id == $siteProductCategory->productCategory->advertisingCompany->id ? true : false
            ];
        });

        $layouts = $this->getLayouts($site);
        $layouts = json_encode($layouts);


        $loadingGifs = $this->getLoadingGifs();
        $loadingGifs = json_encode($loadingGifs);

        $colors = $this->getSiteColors();
        $colors = json_encode($colors);

        $fontFamilies = $this->getSiteFonts();
        $fontFamilies = json_encode($fontFamilies);

        $creditCards = $this->getCreditCards();
        $creditCards = json_encode($creditCards);


        $totalProducts = Product::all()->count();


        // $totalProducts = Prod;


        return view(
            'sites.add_edit',
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
                'creditCards',
                'sortProductsBy',
                'advertisingCompanies',
                'totalProducts'
            )
        );
    }

    public function getCategories(Request $request)
    {

        $request->validate([
            'advertising_company_id' => 'required',
            'site_id' => 'nullable|exists:sites,id'
        ]);

        $categories = ProductCategory::where('advertising_company_id', $request->advertising_company_id)->get();

        $siteProductCategory = null;
        if ($request->site_id) {
            $site = Site::findOrFail($request->site_id);

            $siteProductCategory = $site->siteProductCategory;
        }
        $categories = $categories->map(function ($product) use ($siteProductCategory) {
            return [
                "text" => $product->name,
                "value" => $product->id,
                'selected' => $siteProductCategory && $siteProductCategory->product_category_id == $product->id ? true : false
            ];
        });

        return response()->json([
            "data" => [
                "categories" => $categories
            ]
        ]);
    }

    public function getAdvertisingCompanies()
    {
        $advertisingCompanies = AdvertisingCompany::all();

        return $advertisingCompanies;
    }

    public function getSortProductsBy()
    {

        $sortProductsBy = SortProductBy::all();

        return $sortProductsBy;
    }



    public function getCreditCards()
    {
        $creditCards = CreditCardSet::with('creditCardSetItems')->get();

        $creditCards = $creditCards->map(function ($creditCard) {
            return [
                "id" => $creditCard->id,
                "name" => $creditCard->name,
                "items" => $creditCard->creditCardSetItems->map(function ($creditCardItem) {
                    return [
                        "id" => $creditCardItem->id,
                        "name" => $creditCardItem->name,
                        "image" => Storage::url("uploads/credit-cards/" . $creditCardItem->image)
                    ];
                })
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
                'value' => '#620000'
            ],
            [
                'label' => 'Primary Text Color',
                'name' => 'primary_text_color',
                'value' => '#fff'
            ],
            [
                'label' => 'Secondary Color',
                'name' => 'secondary_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Secondary Text Color',
                'name' => 'secondary_text_color',
                'value' => '#fff'
            ],
            [
                'label' => 'Top bar BG Color',
                'name' => 'top_bar_bg_color',
                'value' => '#ffecea'
            ],
            [
                'label' => 'Top bar Text Color',
                'name' => 'top_bar_text_color',
                'value' => '#444'
            ],
            [
                'label' => 'Header BG Color',
                'name' => 'header_bg_color',
                'value' => '#fff'
            ],
            [
                'label' => 'Header Text Color',
                'name' => 'header_text_color',
                'value' => '#222'
            ],
            [
                'label' => 'Header Icon Color',
                'name' => 'header_icon_color',
                'value' => '#620000'
            ],
            [
                'label' => 'Banner Overlay Color',
                'name' => 'banner_overlay_color',
                'value' => '#00000069'
            ],
            [
                'label' => 'Banner Text Color',
                'name' => 'banner_text_color',
                'value' => '#fff'
            ],
            [
                'label' => 'Button BG Color',
                'name' => 'button_bg_color',
                'value' => '#620000'
            ],
            [
                'label' => 'Button Text Color',
                'name' => 'button_text_color',
                'value' => '#fff'
            ],
            [
                'label' => 'Button Hover BG Color',
                'name' => 'button_hover_bg_color',
                'value' => '#000000'
            ],
            [
                'label' => 'Button Hover Text Color',
                'name' => 'button_hover_text_color',
                'value' => '#fff'
            ],
            [
                'label' => 'Footer BG Color',
                'name' => 'footer_bg_color',
                'value' => '#333'
            ],
            [
                'label' => 'Footer Text Color',
                'name' => 'footer_text_color',
                'value' => '#fff'
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

    public function getLayouts($site = null)
    {

        $layouts = PageLayout::all();


        $sitePageLayouts = [];
        if ($site) {
            $sitePageLayouts = $site->sitePageLayouts()->pluck('page_layout_id')->toArray();

            $layouts = $layouts->map(function ($layout) use ($sitePageLayouts) {

                return [
                    "id" => $layout->id,
                    "name" => $layout->name,
                    "label" => $layout->code,
                    "fixed" => $layout->code == 'header' || $layout->code == 'footer' ? true : false,
                    "selected" => in_array($layout->id, $sitePageLayouts) ? true : false
                ];
            });
        } else {

            $layouts = $layouts->map(function ($layout) use ($sitePageLayouts) {
                return [
                    "id" => $layout->id,
                    "name" => $layout->name,
                    "label" => $layout->code,
                    "fixed" => $layout->code == 'header' || $layout->code == 'footer' ? true : false,
                    "selected" => true,
                ];
            });
        }


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
        $relatedProductSections = RelatedProductSection::whereNotNull("file")->get();
        return $relatedProductSections;
    }

    public function getCheckoutPages()
    {
        $checkoutPages = CheckoutPage::whereNotNull("file")->get();
        return $checkoutPages;
    }

    public function getProductPages()
    {
        $productPages = ProductPage::whereNotNull("file")->get();
        return $productPages;
    }

    public function getFooterTemplates()
    {
        $footerTemplates = FooterTemplate::whereNotNull("file")->get();
        return $footerTemplates;
    }

    public function getFeatureSections()
    {
        $featureSections = FeatureSection::whereNotNull("file")->get();
        return $featureSections;
    }

    public function getCtaSections()
    {
        $ctaSections = CtaSection::whereNotNull("file")->get();
        return $ctaSections;
    }


    public function getPopularProductSections()
    {
        $popularProductSections = PopularProductSection::whereNotNull("file")->get();
        return $popularProductSections;
    }

    public function getContactSections()
    {
        $contactSections = ContactSection::whereNotNull("file")->get();
        return $contactSections;
    }

    public function getAboutSections()
    {
        $aboutSections = AboutSection::whereNotNull("file")->get();
        return $aboutSections;
    }

    public function getProductSections()
    {
        $productSections = ProductSection::whereNotNull("file")->get();
        return $productSections;
    }

    public function getHeroSections()
    {
        $heroSections = HeroSection::whereNotNull("file")->get();
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
        $headerTemplates = HeaderTemplate::whereNotNull("file")->get();
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
            "trial_period" => "required",
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
            "trial_period" => $request->trial_period,
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

    public function submitSitePageLayout(Request $request)
    {

        $request->validate([
            "site_id" => "required|exists:sites,id",
            'layout_items' => 'required|array',

        ]);

        $siteId = $request->site_id;
        $layoutItems = $request->layout_items;

        SitePageLayout::where("site_id", $siteId)->delete();

        foreach ($layoutItems as $layoutItem) {
            SitePageLayout::create([
                "site_id" => $siteId,
                "page_layout_id" => $layoutItem["id"],
            ]);
        }

        return response()->json([
            "message" => "Site Page Layout Added Successfully",
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


    public function submitSiteProductCategory(Request $request)
    {

        $request->validate([
            "site_id" => "required|exists:sites,id",
            "product_category_id" => "required|exists:product_categories,id",
        ]);

        $data = [
            "site_id" => $request->site_id,
            "product_category_id" => $request->product_category_id,
        ];

        $siteProductCategory = SiteProductCategory::where("site_id", $request->site_id)->first();


        if ($siteProductCategory) {
            $siteProductCategory->update($data);
        } else {
            $siteProductCategory = SiteProductCategory::create($data);
        }

        return response()->json([
            "message" => "Site Product Category Added Successfully",
            "data" => [
                "site_product_category_id" => $siteProductCategory->id,
            ]
        ], 200);
    }


    public function submitSiteTemplate(Request $request)
    {


        $request->validate([
            "site_id" => "required|exists:sites,id",
            "header_template_id" => "required|exists:header_templates,id",
            "hero_section_id" => "nullable|exists:hero_sections,id",
            "hero_section_bg_image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "hero_section_product_image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "product_section_id" => "nullable|exists:product_sections,id",
            "product_section_bg_image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "related_product_section_id" => "nullable|exists:related_product_sections,id",
            "about_section_id" => "nullable|exists:about_sections,id",
            "about_section_bg_image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "contact_section_id" => "nullable|exists:contact_sections,id",
            "contact_section_bg_image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "popular_product_section_id" => "nullable|exists:popular_product_sections,id",
            "cta_section_id" => "nullable|exists:cta_sections,id",
            "cta_section_bg_image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "feature_section_id" => "nullable|exists:feature_sections,id",
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

        if ($request->hasFile('hero_section_bg_image')) {

            if ($siteTemplate->hero_section_bg_image) {
                Storage::delete('site-sections/hero/' . $siteTemplate->hero_section_bg_image);
            }


            $heroImage = $request->file('hero_section_bg_image')->store('site-sections/hero');

            $siteTemplate->update([
                "hero_section_bg_image" => basename($heroImage)
            ]);
        } else {
            if ($siteTemplate->hero_section_bg_image) {
                Storage::delete('site-sections/hero/' . $siteTemplate->hero_section_bg_image);
            }
            $siteTemplate->update([
                "hero_section_bg_image" => null
            ]);
        }

        if ($request->hasFile('hero_section_product_image')) {
            if ($siteTemplate->hero_section_product_image) {
                Storage::delete('site-sections/hero/' . $siteTemplate->hero_section_product_image);
            }

            $heroProductImage = $request->file('hero_section_product_image')->store('site-sections/hero');

            $siteTemplate->update([
                "hero_section_product_image" => basename($heroProductImage)
            ]);
        } else {
            if ($siteTemplate->hero_section_product_image) {
                Storage::delete('site-sections/hero/' . $siteTemplate->hero_section_product_image);
            }
            $siteTemplate->update([
                "hero_section_product_image" => null
            ]);
        }


        if ($request->hasFile('about_section_bg_image')) {

            if ($siteTemplate->about_section_bg_image) {
                Storage::delete('site-sections/about/' . $siteTemplate->about_section_bg_image);
            }

            $aboutImage = $request->file('about_section_bg_image')->store('site-sections/about');

            $siteTemplate->update([
                "about_section_bg_image" => basename($aboutImage)
            ]);
        } else {
            if ($siteTemplate->about_section_bg_image) {
                Storage::delete('site-sections/about/' . $siteTemplate->about_section_bg_image);
            }
            $siteTemplate->update([
                "about_section_bg_image" => null
            ]);
        }

        if ($request->hasFile('contact_section_bg_image')) {

            if ($siteTemplate->contact_section_bg_image) {
                Storage::delete('site-sections/contact/' . $siteTemplate->contact_section_bg_image);
            }

            $contactImage = $request->file('contact_section_bg_image')->store('site-sections/contact');

            $siteTemplate->update([
                "contact_section_bg_image" => basename($contactImage)
            ]);
        } else {
            if ($siteTemplate->contact_section_bg_image) {
                Storage::delete('site-sections/contact/' . $siteTemplate->contact_section_bg_image);
            }
            $siteTemplate->update([
                "contact_section_bg_image" => null
            ]);
        }

        if ($request->hasFile('cta_section_bg_image')) {

            if ($siteTemplate->cta_section_bg_image) {
                Storage::delete('site-sections/cta/' . $siteTemplate->cta_section_bg_image);
            }

            $popularProductImage = $request->file('cta_section_bg_image')->store('site-sections/cta');

            $siteTemplate->update([
                "cta_section_bg_image" => basename($popularProductImage)
            ]);
        } else {
            if ($siteTemplate->cta_section_bg_image) {
                Storage::delete('site-sections/cta/' . $siteTemplate->cta_section_bg_image);
            }
            $siteTemplate->update([
                "cta_section_bg_image" => null
            ]);
        }

        if ($request->hasFile('product_section_bg_image')) {

            if ($siteTemplate->product_section_bg_image) {
                Storage::delete('site-sections/product/' . $siteTemplate->product_section_bg_image);
            }

            $productImage = $request->file('product_section_bg_image')->store('site-sections/product');

            $siteTemplate->update([
                "product_section_bg_image" => basename($productImage)
            ]);
        } else {
            if ($siteTemplate->product_section_bg_image) {
                Storage::delete('site-sections/product/' . $siteTemplate->product_section_bg_image);
            }
            $siteTemplate->update([
                "product_section_bg_image" => null
            ]);
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
            "colors_fonts" => "required",
        ]);

        $colors_fonts = $request->colors_fonts;

        $colorFontData = [
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
            "credit_card_set_id" => "required|exists:credit_card_sets,id",

        ]);




        $siteCreditCardSet =  SiteCreditCard::where("site_id", $request->site_id)->first();

        if ($siteCreditCardSet) {
            SiteCreditCard::where("site_id", $request->site_id)->update([
                "credit_card_set_id" => $request->credit_card_set_id
            ]);
        } else {
            SiteCreditCard::create([
                "site_id" => $request->site_id,
                "credit_card_set_id" => $request->credit_card_set_id
            ]);
        }



        return response()->json([
            "message" => "Credit Card Added Successfully",

        ], 200);
    }

    public function submitSiteTermsOthers(Request $request)
    {

        $request->validate([
            'site_id' => 'required|exists:sites,id',
            "display_category" => "required|boolean",
            'display_billing_model' => 'required|boolean',
            'display_related_products' => 'required|boolean',
            'only_show_first_price' => 'required|boolean',
            'show_navigation_cart' => 'required|boolean',
            'show_popular_products' => 'required|boolean',
            'popular_products' => 'required|integer',
            'one_product_cart_limit' => 'required|boolean',
            'shipping_option' => 'required|boolean',
            'shipping_name' => 'required_if:shipping_option,1',
            'shipping_price' => 'required_if:shipping_option,1',
            'generic_terms' => 'required|boolean',
            'individual_product_terms' => 'required|boolean',
            'total_price_terms' => 'required|boolean',
            'sort_product_by_id' => 'required|exists:sort_product_by,id',
            'show_billing_column_checkout_page' => 'required|boolean',
        ]);

        $termsOthersData = [
            'site_id' => $request->site_id,
            'display_category' => $request->display_category,
            'display_billing_model' => $request->display_billing_model,
            'display_related_products' => $request->display_related_products,
            'only_show_first_price' => $request->only_show_first_price,
            'show_navigation_cart' => $request->show_navigation_cart,
            'show_popular_products' => $request->show_popular_products,
            'popular_products' => $request->popular_products,
            'one_product_cart_limit' => $request->one_product_cart_limit,
            'shipping_option' => $request->shipping_option,
            'shipping_name' => $request->shipping_name,
            'shipping_price' => $request->shipping_price,
            'generic_terms' => $request->generic_terms,
            'individual_product_terms' => $request->individual_product_terms,
            'total_price_terms' => $request->total_price_terms,
            'sort_product_by_id' => $request->sort_product_by_id,
            'show_billing_column_checkout_page' => $request->show_billing_column_checkout_page,
        ];


        $siteTermsOthers = SiteTermOther::where("site_id", $request->site_id)->first();

        if ($siteTermsOthers) {
            $siteTermsOthers->update($termsOthersData);
        } else {
            $siteTermsOthers = SiteTermOther::create($termsOthersData);
        }

        return response()->json([
            "message" => "Site Terms Others Added Successfully",
            "data" => [
                "site_terms_others_id" => $siteTermsOthers->id,
            ]
        ], 200);
    }

    public function submitSiteCrmSettings(Request $request)
    {

        $request->validate([
            'site_id' => 'required|exists:sites,id',
            'advertising_company_id' => "required|exists:advertising_companies,id"
        ]);

        $crmData = [
            'site_id' => $request->site_id,
            'advertising_company_id' => $request->advertising_company_id
        ];


        $siteCrmSetting = SiteCrmSetting::where("site_id", $request->site_id)->first();

        if ($siteCrmSetting) {
            $siteCrmSetting->update($crmData);
        } else {
            $siteCrmSetting = SiteCrmSetting::create($crmData);
        }

        return response()->json([
            "message" => "Site CRM settings added successfully",

        ], 200);
    }

    public function siteDownloadAble(Request $request)
    {

        $request->validate([
            'site_id' => 'required|exists:sites,id',
        ]);

        $site = Site::find($request->site_id);

        $site->download_able = 1;

        $site->save();

        return response()->json([
            "message" => "Site download able added successfully",

        ], 200);
    }
}
