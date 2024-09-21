<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChooseusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/login', function () {
    return redirect()->route('login');
})->name('welcome');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return 'Application cache has been cleared';
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home2');

    Route::resource('about' , AboutController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('proceses', ProcessController::class);
    Route::resource('product', ProductController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('chooseus', ChooseusController::class);
    Route::resource('seo', SeoController::class);
});

Route::get('/', [HomeController::class, 'index'])->name('home');

 Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
 Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
 Route::get('process', [HomeController::class, 'process'])->name('process');
 Route::get('products', [HomeController::class, 'product'])->name('products');
 Route::post('save-contact', [HomeController::class, 'contactSave'])->name('save-contact');

 Route::get('single-product/{slug}', [HomeController::class, 'singalProduct'])->name('single-product/{slug}');



