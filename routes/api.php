<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BackendApiController;


//Route::get('/login',[BackendApiController::class,'login']);
Route::get('/category/list',[BackendApiController::class,'getCategoryData']);
Route::get('/category/find/{id}',[BackendApiController::class,'findCategoryData']);
Route::post('/category/store',[BackendApiController::class,'storeCategoryData']);
Route::post('/category/update/{id}',[BackendApiController::class,'categoryUpdate']);
Route::get('/category/delete/{id}',[BackendApiController::class,'categoryDelete']);

Route::get('/check',function (){
    return response()->json(['message'=>"Success"]);
});
