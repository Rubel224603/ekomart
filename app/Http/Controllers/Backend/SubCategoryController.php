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
        $subCategory->name              = $request->name;
        $subCategory->category_id       = $request->category_id;
        $subCategory->slug              = Str::slug($request->name);
        $subCategory->status            = $request->status;
        $subCategory->description       = $request->description;

        if(isset($request->image)){
            //upload image...
            $imagName = time().'-sub-category-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/sub-category/',$imagName);
            //generate image url...
            $imageUrl = url('backend/upload/images/sub-category/'.$imagName);

            //save to db...

            $subCategory->image = $imagName;
            $subCategory->image_url =$imageUrl;


        }

        $subCategory->save();
        flash()->success('Sub-Category created successfully!');



        return redirect()->back();



    }
    public function listSubCategory(){
        $subcategories = SubCategory::latest()->get();
        //return $subcategories;
        return view('website.backend.admin.sub-category.index',compact('subcategories'));

    }
    public function editSubCategory($id){
        $subcategory = SubCategory::find($id);
        $categories = Category::all();

        return view('website.backend.admin.sub-category.edit',compact('subcategory','categories'));

    }
    public function updateSubCategory($id,Request $request){
        $subCategory                = SubCategory::find($id);
        //return $category;
        $subCategory->name          = $request->name;
        $subCategory->slug          = Str::slug($request->name);
        $subCategory->category_id   = $request->category_id;
        $subCategory->status        = $request->status;
        $subCategory->description   = $request->description;
        if(isset($request->image)){
            if($subCategory->image && file_exists('backend/upload/images/sub-category/'.$subCategory->image)){
                unlink('backend/upload/images/sub-category/'.$subCategory->image);
            }
            $imageName              = time().'-sub-category-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/sub-category/',$imageName);
            $imageUrl               = url('backend/upload/images/sub-category/'.$imageName);
            $subCategory->image_url = $imageUrl;
            $subCategory->image     = $imageName;
        }
        $subCategory->save();
        flash()->success('Sub-Category Updated successfully!');

        return redirect()->route('list.sub-category');


    }
    public function deleteSubCategory($id){

        $subCategory = SubCategory::find($id);

        if($subCategory->image && file_exists('backend/upload/images/sub-category/'.$subCategory->image)){
            unlink('backend/upload/images/sub-category/'.$subCategory->image);

        }
        $subCategory->delete();
        flash()->success('Sub-Category deleted!');
        return redirect()->route('list.sub-category');

    }

}
