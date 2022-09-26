<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use   App\Models\SliderTable;

class SliderController extends Controller
{
    public function side(){
        return view('admin.master');
    }

    public function create(){
        return view('admin.slider.slider-create');
    }
    public function store(Request $request){
        $data['heading1'] = $request->heading1;
        $data['description'] = $request->description;
        $data['status'] = $request->status=='on' ? true : false;

        if($request->bg_image){
            if(!file_exists(public_path('slider-images'))){
                mkdir(public_path('slider-images'),0777,true);
            }

            $image=$request->bg_image;
            $name=$image->GetClientOriginalName();
            $path=public_path('slider-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['bg_image']='slider-images/'.$imagename;
        }
        SliderTable::create($data);
        return redirect()->to('slider-index');
    }

    public function index(){
        $data=SliderTable::all();
        return view('admin.slider.slider-index',['key'=>$data]);
    }

    public function view($id){
        $data=SliderTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.slider.slider-view',['key' => $data]);
        }
    }

    public function edit($id){
        $data=SliderTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.slider.slider-edit',['key' => $data]);
        }
    }

    public function update(Request $request){
        $data['heading1'] = $request->heading1;
        $data['description'] = $request->description;
        $data['status'] = $request->status=='on' ? true : false;

        if($request->bg_image){
            if(!file_exists(public_path('slider-images'))){
                mkdir(public_path('slider-images'),0777,true);
            }

            $image=$request->bg_image;
            $name=$image->GetClientOriginalName();
            $path=public_path('slider-images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['bg_image']='slider-images/'.$imagename;
        }
        $slider = sliderTable::where('id',$request->id)->first();
        if($slider){
            $slider->update($data);
        }

        return redirect()->to('slider-index');

    }

    public function delete($id){
        $data=sliderTable::where(['id' => $id])->first();
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }
}

