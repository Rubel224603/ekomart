<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    //
    public function createBrand(){
        return view('website.backend.admin.brand.create');
    }
    public function storeBrand(Request $request){
        $brand = new Brand();
        $brand->name= $request->name;
        $brand->slug=  Str::slug($request->brand_name);
        $brand->status= $request->status;
        $brand->description= $request->description;
        if(isset($request->image)){
            $imagName = time().'-brand-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/brand/',$imagName);
            $brand->image = $imagName;


        }
        $brand->save();
        flash()->success('Brand added successfully!');
        return redirect()->back();

    }
    public function listBrand(){
        $brands = Brand::latest()->get();
        //return $brands;
        return view('website.backend.admin.brand.index',compact('brands'));
    }
    public function editBrand($id){
        $brand = Brand::find($id);
        //return $brands;
        return view('website.backend.admin.brand.edit',compact('brand'));
    }
    public function updateBrand($id, Request $request){
        $brand = Brand::find($id);
        //return $brand;
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->brand_name);
        $brand->status = $request->status;
        $brand->description = $request->description;
        if(isset($request->image)){
            if($brand->image && file_exists('backend/upload/images/brand/'.$brand->image)){
                unlink('backend/upload/images/brand/'.$brand->image);
            }
            $imageName = time().'-brand-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/brand',$imageName);
            $brand->image = $imageName;
        }
        $brand->save();
        flash()->success('Brand updated successfully!');
        return redirect()->route('brand.list');
    }
    public function deleteBrand($id){
        $brand = Brand::find($id);
        $brand->delete();
        flash()->success('Brand added successfully!');
        return redirect()->back();

    }
}
