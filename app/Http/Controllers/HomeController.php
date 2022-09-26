<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use   App\Models\SliderTable;

class HomeController extends Controller
{
    public function user(){
        $data['sliders'] = SliderTable::where('status',true)->get();
        return view('user.slider',['data'=>$data]);
    }

    public function contact(){

        return view('user.contact');
    }

}
