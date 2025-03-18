<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function signup(){
        return view('vendor.signup');
    }

    public function login(){
        return view('vendor.login');
    }

    public function forget(){
        return view('vendor.forget');
    }

    public function index(){
        return view('vendor.index');
    }
}
