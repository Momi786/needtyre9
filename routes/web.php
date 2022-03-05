<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Web\Cartcontroller;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');



require __DIR__.'/auth.php';


//Front View Routes
Route::get('/',[HomeController::class,'home'])->name('home');
// Web Route of All Products to show in Website Controller is Admin/ProductController
Route::get('/products',[ProductController::class,'products']);
Route::get('/detail-products/{id}',[ProductController::class,'productDetail']);
Route::get('/search',[ProductController::class,'search']);


// Auth Middleware For User Add to Cart

Route::post('/add-to-cart',[Cartcontroller::class,'addProduct']);




//Admin panel Routes

    Route::prefix('/admin')->namespace('Admin')->group(function (){
    // Login Route
    Route::match(['get','post'],'/',[AdminController::class,'login'])->name('AdminLogin');

//    Middleware For Admin Panel
    Route::group(['middleware'=>['admin']],function (){
        // Logout Route
        Route::get('/logout1',[AdminController::class,'logout']);
        // Admin Dashboard Home Page
        //Route::get('/dash',[AdminController::class,'dashboard'])->name('dashboard');

        //For All Products in Admin panel
        Route::get('/products-list',[ProductController::class,'listProduct'])->name('productList');
        //Getting data from database
        Route::get('/getAllProducts',[ItemController::class,'getAllProducts']);
    });

});









