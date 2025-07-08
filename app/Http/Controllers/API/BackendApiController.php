<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class BackendApiController extends Controller
{
    //


    public function getData(){
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
                'message'=>"Failed to retrieve get Data ",
                'data'=>null
            ],500);

        }
    }
}
