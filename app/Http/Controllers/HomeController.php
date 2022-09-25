<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function user(){
        return view('user.slider');
    }

    public function contact(){
        return view('user.contact');
    }
    public function side(){
        return view('admin.master');
    }
}
