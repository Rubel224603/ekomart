<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        $products = Product::latest()->get();
        $homeCategories = Category::latest()->skip(3)->take(2)->get();
        $subcategori =SubCategory::latest()->take(5)->with(['products'=> function($query){
            $query->take(3);
        }])->get();
        $recentProducts = Product::latest()->take(4)->get();
        $topRatedProducts = Product::latest()->skip(4)->take(4)->get();
        return view('website.frontend.home.welcome',compact('categories','subcategories','products','subcategori','recentProducts','topRatedProducts'));
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
    public function SubCategoryProduct($slug){
        //return $slug;
        $subcategory = SubCategory::where('slug',$slug)->first();
        //return $subcategory->category->name;

        return view('website.frontend.home.product.sub-category',compact('subcategory'));
    }
    public function productDetails($slug){
       // return $slug;
        //find work when id  get and it's primary key...

        $product = Product::where('slug',$slug)->first();
        //return $product;
        //return $product->id;
        $otherImages= OtherImage::where('product_id',$product->id)->get();
        //return $otherImag;


        $categoryProducts = Product::where('category_id',$product->category_id)->latest()->get();
        //return $categoryProducts;
        return view('website.frontend.home.product.details',compact('product','otherImages','categoryProducts'));
    }
    public function categoryProducts($slug){
        //return $slug;
       //$categories = Category::where('slug',$slug)->latest()->get();
        $category = Category::where('slug',$slug)->first();

       // return $category;
        $products = Product::where('category_id',$category->id)->latest()->get();

        //return $products;

        return view('website.frontend.home.product.category',compact('products','category'));
    }

    public function allCategoryProduct(){
        $categories = Category::latest()->get();
        $products = Product::latest()->get();
        $total=  $products->count();
        $firstHalf = ceil($total/2) ;

        $firstHalfProducts = $products->take($firstHalf);
        //return $firstHalfProducts;
        $lastHalfProducts =$products->skip($firstHalf);
        //return $lastHalfProducts;

        return view('website.frontend.home.product.all',compact('products','categories','firstHalfProducts','lastHalfProducts'));
    }

}
