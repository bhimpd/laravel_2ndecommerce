<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductdetailController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{slug}',[CategoryController::class,'detail']);
Route::get('/category/subcategory/{slug}',[SubCategoryController::class,'detail']);
Route::get('/category/subcategory/tv/{slug}',[ProductdetailController::class,'detail']);