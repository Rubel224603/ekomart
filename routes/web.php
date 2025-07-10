<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\UnitController;


//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//frontend routes....

Route::get('/',[WelcomeController::class,'index'])->name('/');
Route::get('/shop',[WelcomeController::class,'shop'])->name('shop');
Route::get('/account',[WelcomeController::class,'account'])->name('account');
Route::get('/shop',[WelcomeController::class,'shop'])->name('shop');
Route::get('/contact',[WelcomeController::class,'contact'])->name('contact');
Route::get('/about',[WelcomeController::class,'about'])->name('about');

//Backend route....
Route::middleware('auth','admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    //Category...
    Route::get('/admin/category-add', [CategoryController::class, 'createCategory'])->name('category.create');
    Route::post('/admin/category-store', [CategoryController::class, 'storeCategory'])->name('category.store');
    Route::get('/admin/category-list', [CategoryController::class, 'listCategory'])->name('category.list');
    Route::get('/admin/category-edit/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
    Route::post('/admin/category-update/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');
    Route::get('/admin/category-delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');

    //Sub-category...
    Route::get('/admin/sub-category/add',[SubCategoryController::class,'createSubCategory'])->name('create.sub-category');
    Route::post('/admin/sub-category/store',[SubCategoryController::class,'storeSubCategory'])->name('store.sub-category');
    Route::get('/admin/sub-category/list',[SubCategoryController::class,'listSubCategory'])->name('list.sub-category');
    Route::get('/admin/sub-category/edit/{id}',[SubCategoryController::class,'editSubCategory'])->name('edit.sub-category');
    Route::post('/admin/sub-category/update/{id}',[SubCategoryController::class,'updateSubCategory'])->name('update.sub-category');
    Route::get('/admin/sub-category/delete/{id}',[SubCategoryController::class,'deleteSubCategory'])->name('delete.sub-category');

    //Brand...
    Route::get('/admin/brand-add',[BrandController::class,'createBrand'])->name('brand.create');
    Route::post('/admin/brand-store',[BrandController::class,'storeBrand'])->name('brand.store');
    Route::get('/admin/brand-list',[BrandController::class,'listBrand'])->name('brand.list');
    Route::get('/admin/brand-edit/{id}',[BrandController::class,'editBrand'])->name('brand.edit');
    Route::post('/admin/brand-update/{id}',[BrandController::class,'updateBrand'])->name('brand.update');
    Route::get('/admin/brand-delete/{id}',[BrandController::class,'deleteBrand'])->name('brand.delete');

    //Unit...
    Route::get('/admin/unit-add',[UnitController::class,'createUnit'])->name('unit.create');
    Route::post('/admin/unit-store',[UnitController::class,'storeUnit'])->name('unit.store');
    Route::get('/admin/unit-list',[UnitController::class,'listUnit'])->name('unit.list');
    Route::get('/admin/unit-edit/{id}',[UnitController::class,'editUnit'])->name('unit.edit');
    Route::post('/admin/unit-update/{id}',[UnitController::class,'updateUnit'])->name('unit.update');
    Route::get('/admin/unit-delete/{id}',[UnitController::class,'deleteUnit'])->name('unit.delete');


});
