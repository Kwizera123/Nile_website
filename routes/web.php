<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\ProductController;
use App\Http\Controllers\Home\BannerController;
use App\Http\Controllers\StatisticController;
/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(Admincontroller::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','Profile')->name('admin.profile');
    Route::get('/edit/profile','EditProfile')->name('edit.profile');
    Route::post('/store/profile','StoreProfile')->name('store.profile');
    
    Route::get('/change/password','ChangePassword')->name('change.password');
    Route::post('/updatee/password','UpdatePassword')->name('update.password');
});

// Home Slide Controller 
Route::controller(HomeSliderController::class)->group(function(){
    Route::get('/allhome/slide','AllhomeSlide')->name('all.home.slide');
    Route::get('/addhome/slide','AddhomeSlide')->name('add.home.slide');
    Route::post('/store/home/slide','StoreHomeSlider')->name('store.home.slide');

    Route::get('/edit/slide/{id}','EditHomeSlide')->name('edit.home.slide'); 
    Route::post('/update/slide','UpdateSlide')->name('update.slider');
    Route::get('/delete/slide/{id}','DeleteHomeSlide')->name('delete.home.slide');
    
});

// Home About Controller  
Route::controller(AboutController::class)->group(function(){
    Route::get('/all/about','AllAbout')->name('all.about');
    Route::get('/add/about','AddAbout')->name('add.about');
    Route::post('/store/about','StoreAbout')->name('store.about');
    Route::get('/about/edit/{id}','EditAbout')->name('about.page');
    Route::post('/update/about','UpdateAbout')->name('update.about.page');
    Route::get('/delete/about/{id}','DeleteAbout')->name('delete.about');
    Route::get('/about','HomeAbout')->name('home.about');
});

// Home Banner Controller
Route::controller(BannerController::class)->group(function(){
    Route::get('/all/banner','AllBanner')->name('all.banner');
    Route::get('/right/banner','RightBanner')->name('right.banner');
    Route::get('/add/left/banner','AddLeftBanner')->name('add.left.banner');
    Route::post('/store/left/banner','StoreLeftBanner')->name('store.left.banner');
    Route::get('/store/right/banner','AddRightBanner')->name('add.right.banner');
    Route::post('/store/right/banner','StoreRightBanner')->name('store.right.banner');
    Route::get('/left/banner/edit/{id}','EditLeftBenner')->name('left.banner.edit');
    Route::post('/update/left/banner','UpdateLeftBanner')->name('update.left.banner');
    Route::get('/delete/left/banner/{id}','DeleteLeftBanner')->name('delete.left.banner');
    Route::get('/right/banner/edit/{id}','EditRightBenner')->name('edit.right.banner');
    Route::post('/update/Right/banner','UpdateRightBanner')->name('update.Right.banner');
    Route::get('/delete/right/banner/{id}','DeleteRightBanner')->name('delete.right.banner');
});

Route::controller(StatisticController::class)->group(function(){
    Route::get('/all/statistics','AllStatistic')->name('all.statistics');
    Route::get('/create/statistics','CreateStatistic')->name('create.statistic');
});



Route::middleware('auth')->group(function () {

    Route::controller(ProductController::class)->group(function(){
        Route::get('/all/product','AllProduct')->name('all.product');
        Route::get('/add/product','AddProduct')->name('add.product');
        Route::post('/store/product','StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}','EditProduct')->name('edit.product');
        Route::post('/product/update','UpdateProduct')->name('update.product');
        Route::get('/delete/product/{id}','DeleteProduct')->name('delete.product');
    });
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
