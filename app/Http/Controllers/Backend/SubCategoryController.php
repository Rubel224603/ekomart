<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    //
    public function createSubCategory(){
        $categories = Category::all();
        return view('website.backend.admin.sub-category.create',compact('categories'));
    }
    public function storeSubCategory(Request $request){
        //return $request;
        $subCategory                    = new SubCategory();
        $subCategory->cat_id            = $request->cat_id;
        $subCategory->name              = $request->name;
        $subCategory->slug              = Str::slug($request->name);
        $subCategory->status            = $request->status;
        $subCategory->description       = $request->description;

        if(isset($request->image)){
            //upload image...
            $imagName = time().'-category-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/category/',$imagName);
            //generate image url...
            $imageUrl = url('backend/upload/images/category/'.$imagName);

            //save to db...

            $subCategory->image = $imagName;
            $subCategory->image_url =$imageUrl;


        }

        $subCategory->save();
        flash()->success('Sub-Category created successfully!');



        return redirect()->back();


        //return view('website.backend.admin.category.create');
    }
    public function listSubCategory(){
        $subCategory = SubCategory::all();
        return view('website.backend.admin.category.index',compact('categories'));

    }
    public function editCategory($id){
        $SubCategory = SubCategory::find($id);
        return view('website.backend.admin.category.edit',compact('category'));

    }
    public function updateSubCategory($id,Request $request){
        $subCategory = SubCategory::find($id);
        //return $category;
        $subCategory->category_name = $request->category_name;
        $subCategory->slug  = Str::slug($request->category_name);
        $subCategory->status = $request->status;
        $subCategory->description = $request->description;
        if(isset($request->image)){
            if($subCategory->image && file_exists('backend/upload/images/category/'.$subCategory->image)){
                unlink('backend/upload/images/category/'.$subCategory->image);
            }
            $imageName  = time().'-category-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/category/',$imageName);
            $imageUrl = url('backend/upload/images/category/'.$imageName);
            $subCategory->image_url = $imageUrl;
            $subCategory->image = $imageName;
        }
        $subCategory->save();
        flash()->success('Sub-Category Updated successfully!');

        return redirect()->route('category.list');


    }
    public function deleteSubCategory($id){
        $subCategory = SubCategory::find($id);
        if($subCategory->image && file_exists('backend/upload/images/category/'.$subCategory->image)){
            unlink('backend/upload/images/category/'.$subCategory->image);

        }
        $subCategory->delete();
        flash()->success('Sub-Category deleted!');
        return redirect()->route('category.list');

    }
}
