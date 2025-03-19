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

    public function addproduct(){
        return view('vendor.addproduct');
    }

    public function viewproduct(){
        return view('vendor.viewproduct');
    }

    public function editproduct(){
        return view('vendor.editproduct');
    }

}
