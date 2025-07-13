<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function createProduct(){
        $categories  = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        return view('website.backend.admin.product.create', compact('categories', 'subcategories', 'brands', 'units'));


    }
    public function storeProduct(Request $request){
       // return $request;

        $product                    = new Product();

        $product->name              = $request->name;
        $product->category_id       = $request->category_id;
        $product->subcategory_id    = $request->subcategory_id;
        $product->brand_id          = $request->brand_id;
        $product->unit_id           = $request->unit_id;
        $product->code              = $request->code;
        $product->product_price     = $request->product_price;
        $product->selling_price     = $request->selling_price;
        $product->stock             = $request->stock;
        $product->published_status  = $request->published_status;
        $product->sort_description  = $request->sort_description;
        $product->long_description  = $request->long_description;

        //image upload...
        if(isset($request->image)){
            $imageName              = time().'-product-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/product/',$imageName);

            //image save product table in db....
            $product->image         = $imageName;


        }
        $product->meta_title        = $request->meta_title;
        $product->meta_description  = $request->meta_description;
        $product->save();
//        $product->id;

        //Other image upload.....

        if($request->other_image){
           foreach($request->other_image as $image){

             $otherImage             = new OtherImage();
             $otherImage->product_id =  $product->id;

              $otherImageName = time().'-other-image-.'.$image->getClientOriginalExtension();
              $image->move('backend/upload/images/other-image/',$otherImageName);

              //save other image table in db...
              $otherImage->other_image    =  $otherImageName;
              $otherImage->save();
            }
        }
        flash()->success('Product added successfully!');
        return redirect()->back();




    }
    public function listProduct(){
        $products = Product::all();
        return view('website.backend.admin.product.index',compact('products'));
    }
    public function editProduct($id){
        $product = Product::find($id);
        //return $product;
        $categories = Category::all();
        $subcategories= SubCategory::all();
        $units= Unit::all();
        $brands= Brand::all();

        return view('website.backend.admin.product.edit',compact('product','categories','subcategories','units','brands'));
    }

    public function updateProduct($id,Request $request){
        $product = Product::find($id);
       // return $product;
        $product->name = $request->name;
        $product->category_id       = $request->category_id;
        $product->subcategory_id    = $request->subcategory_id;
        $product->brand_id          = $request->brand_id;
        $product->unit_id           = $request->unit_id;
        $product->code              = $request->code;
        $product->product_price     = $request->product_price;
        $product->selling_price     = $request->selling_price;
        $product->stock             = $request->stock;
        $product->published_status  = $request->published_status;
        $product->sort_description  = $request->sort_description;
        $product->long_description  = $request->long_description;
        $product->meta_title        = $request->meta_title;
        $product->meta_description  = $request->meta_description;

        if(isset($request->image)){
            if($product->image && file_exists('backend/upload/images/product/'.$product->image)){
                unlink('backend/upload/images/product/'.$product->image);
            }
            $imageName = time().'-product-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/product',$imageName);
            $product->image         = $imageName;
        }
        $product->save();
        if(isset($request->other_image)){

           $otherImage = OtherImage::where('product_id',$product->id)->get();

           //delete old other image...
           foreach ($otherImage as $item){
               if($item->other_image && file_exists('backend/upload/images/other-image/'.$item->other_image)){
                   unlink('backend/upload/images/other-image/'.$item->other_image);
               }
               $item->delete();
           }

          //upload new other image...

          foreach ($request->other_image as $newImage){

              $newOtherImage             = new OtherImage();

              $newOtherImage->product_id = $product->id;
              $imageName                 = time().'-other-image-.'.$newImage->getClientOriginalExtension();
              $newImage->move('backend/upload/images/other-image/',$imageName);

              $newOtherImage->other_image = $imageName;
              $newOtherImage->save();


          }


        }
        flash()->success('Product Updated successfully!');
        return redirect()->route('product.list');


    }

    public function detailsProduct($id){
        $product = Product::find($id);
        //dd($product);
        return view('website.backend.admin.product.details',compact('product'));
    }
    public function deleteProduct($id){
        $product = Product::find($id);
        if($product->image && file_exists('backend/upload/images/product/'.$product->image)){
            unlink('backend/upload/images/product/'.$product->image);
        }
        $product->delete();
        $otherImages  = OtherImage::where('product_id',$id)->get();
        //return $otherImages;
        foreach ($otherImages as $image){
            if($image->other_image && file_exists('backend/upload/images/other-image/'.$image->other_image)){
                unlink('backend/upload/images/other-image/'.$image->other_image);
            }
            $image->delete();


        }

        flash()->success('Product Deleted !');
        return redirect()->back();


    }
    public function getCategoryBySubCategory(){
        $categoryId = $_GET['id'];
        $subcategories = SubCategory::where('category_id',$categoryId)->get();
        return response()->json($subcategories);

    }

}
