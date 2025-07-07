<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
    public function create(){
        return view('website.backend.admin.category.create');
    }
    public function store(Request $request){
       //return $request;
        $newCategory = new Category();
        $newCategory->category_name     = $request->category_name;
        $newCategory->status            = $request->status;
        $newCategory->description       = $request->description;

        if(isset($request->image)){
            //upload image...
            $imagName = time().'-category-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/category/',$imagName);
            //save to db...
            $newCategory->image = $imagName;


        }
        $newCategory->save();
        flash()->success('Product created successfully!');




        return redirect()->back();


        //return view('website.backend.admin.category.create');
    }
}
