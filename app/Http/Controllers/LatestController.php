<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use   App\Models\LatestTable;

class LatestController extends Controller
{
    public function create(){
        return view('admin.latest.latest-create');
    }

    public function store(Request $request){
        //dd($request->all());
        $data['car'] = $request->car;
        $data['car1'] = $request->car1;
        $data['car2'] = $request->car2;
        $data['car3'] = $request->car3;
        $data['description'] = $request->description;
        $data['description1'] = $request->description1;
        $data['description2'] = $request->description2;
        $data['description3'] = $request->description3;
        $data['price'] = $request->price;
        $data['price'] = $request->price1;
        $data['price2'] = $request->price2;
        $data['price'] = $request->price3;
        $data['status'] = $request->status=='on' ? true : false;

        if($request->image){
            if(!file_exists(public_path('feature-images'))){
                mkdir(public_path('feature-images'),0777,true);
            }

            $image=$request->image;
            $name=$image->GetClientOriginalName();
            $path=public_path('feature-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image']='feature-images/'.$imagename;
        }
        if($request->image2){
            if(!file_exists(public_path('feature-images'))){
                mkdir(public_path('feature-images'),0777,true);
            }

            $image=$request->image2;
            $name=$image->GetClientOriginalName();
            $path=public_path('feature-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image2']='feature-images/'.$imagename;
        }
        if($request->image2){
            if(!file_exists(public_path('feature-images'))){
                mkdir(public_path('feature-images'),0777,true);
            }

            $image=$request->image2;
            $name=$image->GetClientOriginalName();
            $path=public_path('feature-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image2']='feature-images/'.$imagename;
        }
        if($request->image2){
            if(!file_exists(public_path('feature-images'))){
                mkdir(public_path('feature-images'),0777,true);
            }

            $image=$request->image2;
            $name=$image->GetClientOriginalName();
            $path=public_path('feature-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image2']='feature-images/'.$imagename;
        }
        LatestTable::create($data);
        return redirect()->to('feature-index');
    }



}
