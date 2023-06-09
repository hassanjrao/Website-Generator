<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\AboutUsDescriptionController;
use App\Http\Controllers\AboutUsTitleController;
use App\Http\Controllers\AdvertisingCompanyController;
use App\Http\Controllers\ButtonTitleController;
use App\Http\Controllers\CartPageController;
use App\Http\Controllers\CheckoutPageController;
use App\Http\Controllers\ContactDescriptionController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\ContactSectionController;
use App\Http\Controllers\ContactTitleController;
use App\Http\Controllers\CrmController;
use App\Http\Controllers\CtaSectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeatureSectionController;
use App\Http\Controllers\FooterTemplateController;
use App\Http\Controllers\FtpController;
use App\Http\Controllers\HeaderTemplateController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\NavigationPageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PopularProductSectionController;
use App\Http\Controllers\PopularTitleController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProductSectionController;
use App\Http\Controllers\ProductShopOption;
use App\Http\Controllers\ProductShopOptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelatedProductSectionController;
use App\Http\Controllers\RoleManagementController;
use App\Http\Controllers\ShopTitleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SloganController;
use App\Http\Controllers\TagLineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZippedSiteController;
use App\Notifications\SiteUploadStatusNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register' => false]);

Route::get("test", function(){
    $site= \App\Models\Site::find(1);

    $user=\App\Models\User::find(1);

    $user->notify(new SiteUploadStatusNotification($site));

    dd("done");

    $advertisingCompanies= \App\Models\AdvertisingCompany::all();

    return view("advertising-companies.index", compact("advertisingCompanies"));

    // dd("done");

});

Route::middleware(["auth"])->group(function () {
    Route::get('/', [DashboardController::class,"index"])->name('dashboard.index');

    Route::resource('users', UserController::class);

    Route::resource("advertising-companies",AdvertisingCompanyController::class);

    Route::resource("crms",CrmController::class);

    Route::resource("ftps",FtpController::class);

    Route::resource("product-categories", ProductCategoryController::class);
    Route::resource("products", ProductController::class);

    Route::resource("shop-options",ProductShopOptionController::class);


    Route::post("update-role-permissions", [RoleManagementController::class,"updateRolePermissions"])->name("roles.update-role-permissions");
    Route::resource("roles", RoleManagementController::class);

    Route::resource("profile", ProfileController::class);


    Route::prefix("templates")->group(function(){
        Route::resource("headers",HeaderTemplateController::class);
        Route::resource("footers",FooterTemplateController::class);
        Route::resource("hero-sections",HeroSectionController::class);
        Route::resource("about-sections",AboutSectionController::class);
        Route::resource("product-sections",ProductSectionController::class);
        Route::resource("related-product-sections",RelatedProductSectionController::class);
        Route::resource("popular-product-sections",PopularProductSectionController::class);
        Route::resource("cta-sections",CtaSectionController::class);
        Route::resource("contact-sections",ContactSectionController::class);
        Route::resource("feature-sections",FeatureSectionController::class);
    });



    Route::prefix("pages")->group(function(){
        Route::resource("product-pages",ProductPageController::class);
        Route::resource("checkout-pages",CheckoutPageController::class);
        Route::resource("contact-pages",ContactPageController::class);
        Route::resource("cart-pages",CartPageController::class);
        Route::resource("navigation-pages",NavigationPageController::class);
    });



    Route::prefix("content")->group(function(){
        Route::post("slogans/update-title", [SloganController::class,"updateTitle"])->name("slogans.update-title");
        Route::resource("slogans",SloganController::class);
        Route::resource("tag-lines",TagLineController::class);
        Route::resource("about-us-titles",AboutUsTitleController::class);
        Route::resource("about-us-descriptions",AboutUsDescriptionController::class);
        Route::resource("shop-titles",ShopTitleController::class);
        Route::resource("button-titles",ButtonTitleController::class);
        Route::resource("popular-titles",PopularTitleController::class);
        Route::resource("contact-titles",ContactTitleController::class);
        Route::resource("contact-descriptions",ContactDescriptionController::class);
    });


    Route::post('notifications/mark-as-read', [NotificationController::class,"markAsRead"])->name('notifications.mark-as-read');
    Route::get("notifications/mark-all-as-read", [NotificationController::class,"markAllAsRead"])->name("notifications.mark-all-as-read");
    Route::resource("notifications",NotificationController::class);





    Route::prefix("sites")->group(function () {

        Route::get("/", [SiteController::class,"index"])->name("sites.index");
        Route::get("create", [SiteController::class,"create"])->name("sites.create");
        Route::get("edit/{site}", [SiteController::class,"edit"])->name("sites.edit");
        Route::post("create-site", [SiteController::class,"createSite"])->name("sites.createSite");

        Route::post("site-downloadable", [SiteController::class,"siteDownloadAble"])->name("sites.siteDownloadAble");


        Route::get("get-categories", [SiteController::class,"getCategories"])->name("sites.get-categories");

        Route::post("submit-site-content", [SiteController::class,"submitSiteContent"])->name("sites.submit-site-content");
        Route::post("submit-site-product-category", [SiteController::class,"submitSiteProductCategory"])->name("sites.submit-site-product-category");

        Route::post("submit-site-template", [SiteController::class,"submitSiteTemplate"])->name("sites.submit-site-template");

        Route::post("submit-site-template-images", [SiteController::class,"submitSiteTemplateImages"])->name("sites.submit-site-template-images");


        Route::post("submit-site-loading-gif", [SiteController::class,"submitSiteLoadingGif"])->name("sites.submit-site-loading-gif");
        Route::post("submit-site-color-font", [SiteController::class,"submitSiteColorFont"])->name("sites.submit-site-color-font");
        Route::post("submit-site-credit-card", [SiteController::class,"submitSiteCreditCard"])->name("sites.submit-site-credit-card");
        Route::post("submit-site-terms-others", [SiteController::class,"submitSiteTermsOthers"])->name("sites.submit-site-terms-others");
        Route::post("submit-site-crm-settings", [SiteController::class,"submitSiteCrmSettings"])->name("sites.submit-site-crm-settings");
        Route::post("submit-site-page-layout", [SiteController::class,"submitSitePageLayout"])->name("sites.submit-site-page-layout");



        Route::get("download/{site}", [ZippedSiteController::class,"download"])->name("sites.download");

        Route::get("preview/{site}", [ZippedSiteController::class,"previewSite"])->name("sites.preview");

        Route::post("upload-to-server", [ZippedSiteController::class,"uploadToServer"])->name("sites.uploadToServer");



    });

});
