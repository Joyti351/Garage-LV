<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use   App\Models\FeatureTable;

class FeatureController extends Controller
{
    public function create(){
        return view('admin.feature.feature-create');
    }

    public function store(Request $request){
        //dd($request->all());
        $data['heading'] = $request->heading;
        $data['heading1'] = $request->heading1;
        $data['heading2'] = $request->heading2;
        $data['heading3'] = $request->heading3;
        $data['description'] = $request->description;
        $data['description1'] = $request->description1;
        $data['description2'] = $request->description2;
        $data['description3'] = $request->description3;
        $data['price'] = $request->price;
        $data['price2'] = $request->price2;
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
        FeatureTable::create($data);
        return redirect()->to('feature-index');
    }
    public function index(){
        $data=featureTable::all();
        return view('admin.feature.feature-index',['key'=>$data]);
    }
    public function view($id){
        $data=FeatureTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.feature.feature-view',['key' => $data]);
        }
    }
    public function edit($id){
        $data=FeatureTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.feature.feature-edit',['key' => $data]);
        }
    }
    public function update(Request $request){
        //dd($request->all());
        $data['heading'] = $request->heading;
        $data['heading1'] = $request->heading1;
        $data['heading2'] = $request->heading2;
        $data['heading3'] = $request->heading3;
        $data['description'] = $request->description;
        $data['description1'] = $request->description1;
        $data['description2'] = $request->description2;
        $data['description3'] = $request->description3;
        $data['price'] = $request->price;
        $data['price2'] = $request->price2;
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
        $slider = FeatureTable::where('id',$request->id)->first();
        if($slider){
            $slider->update($data);
        }

        return redirect()->to('feature-index');
    }

    public function delete($id){
        $data=FeatureTable::where(['id' => $id])->first();
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }
}
