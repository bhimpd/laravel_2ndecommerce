<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{slug}/{id}',[CategoryController::class,'detail']);
Route::get('/category/Electronics/{slug}',[SubCategoryController::class,'detail']);