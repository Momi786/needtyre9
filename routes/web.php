<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\ProductController;
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


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';


//Front View Routes
Route::get('/',[HomeController::class,'home'])->name('home');





//Admin Panel Routes

Route::get('/admin',[AdminController::class,'admin']);

Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

//For All Products in Admin panel

Route::get('/products',[ProductController::class,'listProduct'])->name('productList');
//Getting data from database
Route::get('/getAllProducts',[ItemController::class,'getAllProducts']);

