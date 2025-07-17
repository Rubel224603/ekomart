<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class CategoryController extends Controller
{
    //
    public function createCategory(){
        return view('website.backend.admin.category.create');
    }
    public function storeCategory(Request $request){
       //return $request;
        $newCategory = new Category();
        $newCategory->name              = $request->name;
        $newCategory->slug              = Str::slug($request->category_name);
        $newCategory->status            = $request->status;
        $newCategory->description       = $request->description;

        if(isset($request->image)){
            //upload image...
            $imagName = time().'-category-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/category/',$imagName);
            //generate image url...
            $imageUrl = url('backend/upload/images/category/'.$imagName);

            //save to db...

             $newCategory->image = $imagName;
             $newCategory->image_url =$imageUrl;


        }

        $newCategory->save();
        flash()->success('Product created successfully!');




        return redirect()->back();


        //return view('website.backend.admin.category.create');
    }
    public function listCategory(){
        $categories = Category::latest()->get();
        //return $categories;
        return view('website.backend.admin.category.index',compact('categories'));

    }
    public function editCategory($id){
        $category = Category::find($id);
        return view('website.backend.admin.category.edit',compact('category'));

    }
    public function updateCategory($id,Request $request){
        $category = Category::find($id);
        //return $category;
        $category->name = $request->name;
        $category->slug  = Str::slug($request->name);
        $category->status = $request->status;
        $category->description = $request->description;
        if(isset($request->image)){
            if($category->image && file_exists('backend/upload/images/category/'.$category->image)){
                unlink('backend/upload/images/category/'.$category->image);
            }
            $imageName  = time().'-category-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/category/',$imageName);
            $imageUrl = url('backend/upload/images/category/'.$imageName);
            $category->image_url = $imageUrl;
            $category->image = $imageName;
        }
        $category->save();
        flash()->success('Category Updated successfully!');

        return redirect()->route('category.list');


    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if ($category->image && file_exists('backend/upload/images/category/' . $category->image)) {
            unlink('backend/upload/images/category/' . $category->image);

        }
        $category->delete();
        flash()->success('Category deleted!');
        return redirect()->route('category.list');

    }

    public function categoryImageDownlaod($id){

        $category = Category::find($id);
        //return $category->image;
        if($category->image && file_exists('backend/upload/images/category/'.$category->image)){
                return response()->download('backend/upload/images/category/'.$category->image);
        }else{
            return "no file ";
        }
    }
}
