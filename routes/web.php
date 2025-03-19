<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SubCategoryController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductdetailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{slug}',[CategoryController::class,'detail']);
Route::get('/category/subcategory/{slug}',[SubCategoryController::class,'detail']);
Route::get('/category/subcategory/tv/{slug}',[ProductdetailController::class,'detail']);
Route::get('/cart-listing/{slug}',[CartController::class,'list']);
Route::get('/checkout/{slug}',[CheckoutController::class,'checkout']);

Route::get('/register',[UserController::class,'register']);
Route::get('/register1',[UserController::class,'register1']);
Route::get('/login',[UserController::class,'login']);
Route::get('/login1',[UserController::class,'login1']);


// User dashboard routes start here
Route::get('/user',[UserController::class,'index']);
Route::get('/user/order-history',[UserController::class,'history']);
Route::get('/user/detail',[UserController::class,'detail']);
Route::get('/user/settings',[UserController::class,'settings']);


// Vendor dashboard routes start here
Route::get('/vendor/signup',[VendorController::class,'signup']);
Route::get('/vendor/login',[VendorController::class,'login']);
Route::get('/vendor/forget',[VendorController::class,'forget']);
Route::get('/vendor/index',[VendorController::class,'index']);
Route::get('/vendor/addproduct',[VendorController::class,'addproduct']);






