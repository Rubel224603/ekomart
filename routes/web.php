<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//frontend routes....

Route::get('/',[WelcomeController::class,'index'])->name('/');
Route::get('/shop',[WelcomeController::class,'shop'])->name('shop');
Route::get('/account',[WelcomeController::class,'account'])->name('account');
Route::get('/shop',[WelcomeController::class,'shop'])->name('shop');
Route::get('/contact',[WelcomeController::class,'contact'])->name('contact');
Route::get('/about',[WelcomeController::class,'about'])->name('about');

//dashboard controller....
//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
