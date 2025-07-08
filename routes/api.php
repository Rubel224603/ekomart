<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BackendApiController;


//Route::get('/login',[BackendApiController::class,'login']);
Route::get('/test',[BackendApiController::class,'getData']);
Route::get('/check',function (){
    return response()->json(['message'=>"Success"]);
});
