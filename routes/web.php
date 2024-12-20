<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\ProductController;
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
    Route::get('/home/slide','HomeSlide')->name('home.slide');
    Route::post('/update/slider','UpdateSlider')->name('update.slider');
});

// Home About Controller 
Route::controller(AboutController::class)->group(function(){
    Route::get('/about/page','AboutPage')->name('about.page');
    Route::post('/update/about','UpdateAbout')->name('update.about.page');
    Route::get('/about','HomeAbout')->name('home.about');
});



Route::middleware('auth')->group(function () {

    Route::controller(ProductController::class)->group(function(){
        Route::get('/all/product','AllProduct')->name('all.product');
        Route::get('/add/product','AddProduct')->name('add.product');
        Route::post('/store/product','StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}','EditProduct')->name('edit.product');
        Route::post('/product/update','UpdateProduct')->name('update.product');
    });
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
