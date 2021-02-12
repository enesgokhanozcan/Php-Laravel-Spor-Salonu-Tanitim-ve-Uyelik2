<?php

use App\Http\Controllers\Admin\MesssageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\UserController;
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

Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/Anasayfa', '/home');

Route::get('/home', [HomeController::class, 'index'])-> name('home');

Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/fag', [HomeController::class, 'fag'])->name('fag');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/product/{id}/{slug}', [HomeController::class, 'product'])->name('product');





Route::get('/', function () {
    return view('home.index');
});



//Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::middleware('admin')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

        #Category
        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');


        #Product
        Route::prefix('product')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin_products');
        Route::get('create', [\App\Http\Controllers\Admin\ProductController::class,'create'])->name('admin_product_add');
        Route::post('store', [\App\Http\Controllers\Admin\ProductController::class,'store'])->name('admin_product_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class,'edit'])->name('admin_product_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class,'update'])->name('admin_product_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('admin_product_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ProductController::class,'show'])->name('admin_product_show');

        });


        #Message
        Route::prefix('message')->group(function (){
            Route::get('/', [MesssageController::class,'index'])->name('admin_message');
            Route::get('edit/{id}', [MesssageController::class,'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MesssageController::class,'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MesssageController::class,'destroy'])->name('admin_message_delete');
            Route::get('show', [MesssageController::class,'show'])->name('admin_message_show');

        });


        #Product Images Galery
        Route::prefix('image')->group(function (){

            Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
            Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
            Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');

        });

        #Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');
    });

});


//User
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('user_products');
        Route::get('create', [ProductController::class, 'create'])->name('user_product_add');
        Route::post('store', [ProductController::class, 'store'])->name('user_product_store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('user_product_edit');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('user_product_update');
        Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('user_product_delete');
        Route::get('show', [ProductController::class, 'show'])->name('user_product_show');
    });

    #order
    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('user_order');
        Route::post('create', [OrderController::class, 'create'])->name('user_order_add');
        Route::post('store', [OrderController::class, 'store'])->name('user_order_store');
        Route::get('edit/{id}', [OrderController::class, 'edit'])->name('user_order_edit');
        Route::post('update/{id}', [OrderController::class, 'update'])->name('user_order_update');
        Route::get('delete/{id}', [OrderController::class, 'destroy'])->name('user_order_delete');
        Route::get('show/{id}', [OrderController::class, 'show'])->name('user_order_show');
    });

#ShopCart
Route::prefix('shopcart')->group(function (){
    Route::get('/', [ShopcartController::class,'index'])->name('user_shopcart');
    Route::post('store/{id}', [ShopcartController::class,'store'])->name('user_shopcart_add');
    Route::post('update/{id}', [ShopcartController::class,'update'])->name('user_shopcart_update');
    Route::get('delete/{id}', [ShopcartController::class,'destroy'])->name('user_shopcart_delete');
    });
});










Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){


    Route::get('/', [UserController::class,'index'])->name('profile');


});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){


    Route::get('/profile', [UserController::class,'index'])->name('userprofile');


});









Route::get('/admin/login', [HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class,'logout'])->name('logout');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
