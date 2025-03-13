<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list($slug){
        return view('categories/cart-list');
    }
}
