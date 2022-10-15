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
        $data['price1'] = $request->price1;
        $data['price2'] = $request->price2;
        $data['price3'] = $request->price3;
        $data['status'] = $request->status=='on' ? true : false;

        if($request->image){
            if(!file_exists(public_path('latest-images'))){
                mkdir(public_path('latest-images'),0777,true);
            }

            $image=$request->image;
            $name=$image->GetClientOriginalName();
            $path=public_path('latest-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image']='latest-images/'.$imagename;
        }
        if($request->image1){
            if(!file_exists(public_path('latest-images'))){
                mkdir(public_path('latest-images'),0777,true);
            }

            $image=$request->image1;
            $name=$image->GetClientOriginalName();
            $path=public_path('latest-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image1']='latest-images/'.$imagename;
        }
        if($request->image2){
            if(!file_exists(public_path('latest-images'))){
                mkdir(public_path('latest-images'),0777,true);
            }

            $image=$request->image2;
            $name=$image->GetClientOriginalName();
            $path=public_path('latest-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image2']='latest-images/'.$imagename;
        }
        if($request->image3){
            if(!file_exists(public_path('latest-images'))){
                mkdir(public_path('latest-images'),0777,true);
            }

            $image=$request->image3;
            $name=$image->GetClientOriginalName();
            $path=public_path('latest-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image3']='latest-images/'.$imagename;
        }
        LatestTable::create($data);
        return redirect()->to('latest-index');


    }
    public function index(){
        $data=LatestTable::all();
        return view('admin.latest.latest-index',['key'=>$data]);
    }

    public function view($id){
        $data=latestTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.latest.latest-view',['key' => $data]);
        }
    }

    public function edit($id){
        $data=LatestTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.latest.latest-edit',['key' => $data]);
        }
    }

    public function update(Request $request){
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
        $data['price1'] = $request->price1;
        $data['price2'] = $request->price2;
        $data['price3'] = $request->price3;
        $data['status'] = $request->status=='on' ? true : false;

        if($request->image){
            if(!file_exists(public_path('latest-images'))){
                mkdir(public_path('latest-images'),0777,true);
            }

            $image=$request->image;
            $name=$image->GetClientOriginalName();
            $path=public_path('latest-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image']='latest-images/'.$imagename;
        }
        if($request->image1){
            if(!file_exists(public_path('latest-images'))){
                mkdir(public_path('latest-images'),0777,true);
            }

            $image=$request->image1;
            $name=$image->GetClientOriginalName();
            $path=public_path('latest-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image1']='latest-images/'.$imagename;
        }
        if($request->image2){
            if(!file_exists(public_path('latest-images'))){
                mkdir(public_path('latest-images'),0777,true);
            }

            $image=$request->image2;
            $name=$image->GetClientOriginalName();
            $path=public_path('latest-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image2']='latest-images/'.$imagename;
        }
        if($request->image3){
            if(!file_exists(public_path('latest-images'))){
                mkdir(public_path('latest-images'),0777,true);
            }

            $image=$request->image3;
            $name=$image->GetClientOriginalName();
            $path=public_path('latest-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image3']='latest-images/'.$imagename;
        }
        $slider = LatestTable::where('id',$request->id)->first();
        if($slider){
            $slider->update($data);
        }

        return redirect()->to('latest-index');


    }

    public function delete($id){
        $data=LatestTable::where(['id' => $id])->first();
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }



}
