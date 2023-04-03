<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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
        Route::get("download/{site}", [SiteController::class,"download"])->name("sites.download");

        Route::post("submit-site-content", [SiteController::class,"submitSiteContent"])->name("sites.submit-site-content");
    });

});
