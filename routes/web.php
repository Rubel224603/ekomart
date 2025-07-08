<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;

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
Route::get('/category-add', [CategoryController::class, 'createCategory'])->name('category.create');
Route::post('/category-store', [CategoryController::class, 'storeCategory'])->name('category.store');
Route::get('/category-list', [CategoryController::class, 'listCategory'])->name('category.list');
Route::get('/category-edit/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
Route::post('/category-update/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');
Route::get('/category-delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
Route::get('/sub-category/add',[SubCategoryController::class,'createSubCategory'])->name('create.sub-category');
Route::post('/sub-category/store',[SubCategoryController::class,'storeSubCategory'])->name('store.sub-category');
Route::get('/sub-category/list',[SubCategoryController::class,'listSubCategory'])->name('list.sub-category');
