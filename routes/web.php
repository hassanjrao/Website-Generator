<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZippedSiteController;
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

Route::middleware(["auth"])->group(function () {
    Route::get('/', [DashboardController::class,"index"])->name('dashboard.index');

    Route::resource('users', UserController::class);

    // Route::get("sites/{site}/download", [SiteController::class,"download"])->name("sites.download");
    // Route::resource("sites", SiteController::class);

    Route::prefix("sites")->group(function () {

        Route::get("/", [SiteController::class,"index"])->name("sites.index");
        Route::get("create", [SiteController::class,"create"])->name("sites.create");
        Route::post("create-site", [SiteController::class,"createSite"])->name("sites.createSite");

        Route::get("get-categories", [SiteController::class,"getCategories"])->name("sites.get-categories");

        Route::post("submit-site-content", [SiteController::class,"submitSiteContent"])->name("sites.submit-site-content");
        Route::post("submit-site-product-category", [SiteController::class,"submitSiteProductCategory"])->name("sites.submit-site-product-category");
        Route::post("submit-site-template", [SiteController::class,"submitSiteTemplate"])->name("sites.submit-site-template");
        Route::post("submit-site-loading-gif", [SiteController::class,"submitSiteLoadingGif"])->name("sites.submit-site-loading-gif");
        Route::post("submit-site-color-font", [SiteController::class,"submitSiteColorFont"])->name("sites.submit-site-color-font");
        Route::post("submit-site-credit-card", [SiteController::class,"submitSiteCreditCard"])->name("sites.submit-site-credit-card");
        Route::post("submit-site-terms-others", [SiteController::class,"submitSiteTermsOthers"])->name("sites.submit-site-terms-others");
        Route::post("submit-site-crm-settings", [SiteController::class,"submitSiteCrmSettings"])->name("sites.submit-site-crm-settings");
        Route::post("submit-site-page-layout", [SiteController::class,"submitSitePageLayout"])->name("sites.submit-site-page-layout");



        Route::get("download/{site}", [ZippedSiteController::class,"download"])->name("sites.download");



    });

});
