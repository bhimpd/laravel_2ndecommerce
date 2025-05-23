<?php

use App\Http\Controllers\AdminController;
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
Route::get('/vendor/viewproduct',[VendorController::class,'viewproduct']);
Route::get('/vendor/editproduct',[VendorController::class,'editproduct']);
Route::get('/vendor/orders',[VendorController::class,'orders']);
Route::get('/vendor/orderdetail',[VendorController::class,'orderdetail']);
Route::get('/vendor/users',[VendorController::class,'users']);
Route::get('/vendor/profile',[VendorController::class,'profile']);



// Admin dashboard routes start here
Route::get('/admin/login',[AdminController::class,'login']);
Route::get('/admin/index',[AdminController::class,'index']);
Route::get('/admin/addproduct',[AdminController::class,'addproduct']);
Route::get('/admin/viewproduct',[AdminController::class,'viewproduct']);
Route::get('/admin/editproduct',[AdminController::class,'editproduct']);
Route::get('/admin/orders',[AdminController::class,'orders']);
Route::get('/admin/orderdetail',[AdminController::class,'orderdetail']);
Route::get('/admin/users',[AdminController::class,'users']);
Route::get('/admin/profile',[AdminController::class,'profile']);
Route::get('/admin/addcategory',[AdminController::class,'addcategory']);
Route::get('/admin/viewcategory',[AdminController::class,'viewcategory']);
Route::get('/admin/editcategory',[AdminController::class,'editcategory']);
Route::get('/admin/vendors',[AdminController::class,'vendors']);
Route::get('/admin/products',[AdminController::class,'products']);

















