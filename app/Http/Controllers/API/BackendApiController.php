<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BackendApiController extends Controller
{
    //


    public function getCategoryData(){
       $categories = Category::all();
        try{
            if(!$categories){
                return response()->json([
                    'success'=>false,
                    'message'=>"Data not found",
                    'data'=>null
                ],404);

            } else if($categories->isEmpty()){
                return response()->json([
                    'success'=>true,
                    'message'=>"Data not found",
                    'data'=>null
                ],404);
            }else{
                return response()->json([
                    'success'=>true,
                    'message'=>"Success",
                    'data'=>$categories
                ],200);
            }
        }catch (\Exception $e){
            return response()->json([
                'success'=>false,
                'message'=>"Failed to retrieve get Data ".$e->getMessage(),
                'data'=>null
            ],500);

        }
    }

    public function findCategoryData($id){
        $category = Category::find($id);
       // return response()->json('Success');
       try{
           if(!$category){
                return response()->json([
                    'status'=>false,
                    'message'=>"Data not Found",
                    'data'=>null
                ]);
           }
           return response()->json([
               'status'=>true,
               'message'=>"Success",
               'data'=>$category
           ]);
       }catch(\Exception $e){
           return response()->json([
               'status'=>false,
               'message'=>"Failed to retrieve find data ".$e->getMessage(),
               'data'=>null
           ]);
       }
    }
    public function storeCategoryData(Request $request){
        //return response()->json('success');
        try{
            $newCategory                = new Category();
            $newCategory->name          = $request->name;
            $newCategory->slug          = Str::slug($request->name);
            $newCategory->status        = $request->status;
            $newCategory->description   = $request->description;

            if(isset($request->image)){
                $imagName = time().'-category-.'.$request->image->getClientOriginalExtension();
                $request->image->move('backend/upload/images/category/',$imagName);

                $imageUrl = url('backend/upload/images/category/'.$imagName);
                $newCategory->image     = $imagName;
                $newCategory->image_url = $imageUrl;

            }
//            $newCategory->image=$request->image;

            $newCategory->save();
            return response()->json([
                'status'=>true,
                'message'=>"Category save successfully",
                'data'=>$newCategory
            ]);
        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
                'message'=>"Failed to save database".$e->getMessage(),
                'data'=>null
            ]);
        }

    }

    public function categoryUpdate($id, Request $request)
    {
        try{
            $category = Category::find($id);
            if(!$category){
                return response()->json([
                    'status'=>false,
                    'message'=>"data not found",
                    'data'=>null,
                ]);

            }
            $category->name          = $request->name;
            $category->slug          = Str::slug($request->name);
            $category->status        = $request->status;
            $category->description   = $request->description;
            if(isset($request->image)){
                if($category->image && file_exists('backend/upload/images/category/'.$category->image)){
                    unlink('backend/upload/images/category/'.$category->image);
                }

                $imageName           = time().'-category-.'.$request->image->getClientOriginalExtension();
                $request->image->move('backend/upload/images/category/',$imageName);
                $imageUrl            = url('backend/upload/images/category/'.$imageName);

                //save to db...
                $category->image     = $imageName;
                $category->image_url = $imageUrl;
            }
            $category->save();

            return response()->json([
                'status'=>true,
                'message'=>"Category updated successfully",
                'data'=>$category
            ]);

        }catch(\Exception $e){
            return resoponse()->josn([
                'status'=>false,
                'message'=>"Failed to update data".$e->getMessage(),
                'data'=>null,
            ]);
        }

    }

    public function categoryDelete($id){

        try{
            $category = Category::find($id);
            if(!$category){
                return response()->json([
                    'status'=>false,
                    'message'=>"Data not found",
                    'data'=>null,
                ]);
            }
            $category->delete();

            return response()->json([
                'status'=>"success",
                'message'=>"Category Deleted Successfully",
                'data'=>null
            ]);

        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
                'message'=>"Category deleted unable ".$e->getMessage(),
                'data'=>null
            ]);
        }

    }




}
