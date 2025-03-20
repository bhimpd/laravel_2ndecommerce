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

    public function orders(){
        return view('vendor.orders');
    }

    public function orderdetail(){
        return view('vendor.orderdetail');
    }

    public function users(){
        return view('vendor.users');
    }
    
    public function profile(){
        return view('vendor.profile');
    }
}
