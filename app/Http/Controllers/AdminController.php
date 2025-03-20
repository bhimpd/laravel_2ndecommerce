<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login(){
        return view('admin.login');
    }


    public function index(){
        return view('admin.index');
    }

    public function addproduct(){
        return view('admin.addproduct');
    }

    public function viewproduct(){
        return view('admin.viewproduct');
    }

    public function editproduct(){
        return view('admin.editproduct');
    }

    public function orders(){
        return view('admin.orders');
    }

    public function orderdetail(){
        return view('admin.orderdetail');
    }

    public function users(){
        return view('admin.users');
    }
    
    public function profile(){
        return view('admin.profile');
    }

    public function addcategory(){
        return view('admin.addcategory');
    }

    public function viewcategory(){
        return view('admin.viewcategory');
    }

    public function editcategory(){
        return view('admin.editcategory');
    }

    public function vendors(){
        return view('admin.vendors');
    }


    public function products(){
        return view('admin.products');
    }
}
