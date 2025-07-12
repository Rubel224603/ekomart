<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        return view('website.frontend.home.welcome',compact('categories','subcategories'));
    }
    public function shop(){
        return view('website.frontend.home.shop');
    }
    public function account(){
        return view('website.frontend.home.account');
    }
    public function contact(){
        return view('website.frontend.home.contact');
    }
    public function about(){
        return view('website.frontend.home.about');
    }
    public function productCategory(){
      //  $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        return view('website.frontend.home.productcategory');
    }

}
