<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\UnitController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

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


Route::get('all-category-product', [WelcomeController::class, 'allCategoryProduct'])->name('all-category.product');
Route::get('category-product/{slug}', [WelcomeController::class, 'categoryProducts'])->name('category.product');

//Route::get('category-product/{slug}', [WelcomeController::class, 'productCategory'])->name('category-product')
Route::get('/sub-category-product/{slug}', [WelcomeController::class, 'SubCategoryProduct'])->name('subcategory-product');
Route::get('shop/product/details/{slug}',[WelcomeController::class,'productDetails'])->name('shop-product.details');

//Cart...
Route::get('/cart-all',[CartController::class,'all']);
Route::get('/cart-added/index',[CartController::class,'addToCart'])->name('cart.add');
Route::post('/cart-store/{id}',[CartController::class,'cartStore'])->name('cart.store');
Route::get('/cart-checkout/',[CartController::class,'checkout'])->name('cart.checkout');

//New order...
Route::post('/order-confirm/',[OrderController::class,'confirmOrder'])->name('order.confirm');
Route::get('/completed-order/welcome',[OrderController::class,'completedOrder'])->name('order.welcome');

//ajax fetch...
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/delete', [CartController::class, 'cartDelete'])->name('cart.delete');

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
    Route::get('/admin/category-image-download/{id}', [CategoryController::class, 'categoryImageDownlaod'])->name('category.image.download');

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

    //Products...
    Route::get('/admin/product-add',[ProductController::class,'createProduct'])->name("product.create");
    Route::post('/admin/product-store',[ProductController::class,'storeProduct'])->name("product.store");
    Route::get('/admin/product-list',[ProductController::class,'listProduct'])->name("product.list");
    Route::get('/admin/product-edit/{id}',[ProductController::class,'editProduct'])->name("product.edit");
    Route::post('/admin/product-update/{id}',[ProductController::class,'updateProduct'])->name("product.update");
    Route::get('/admin/product-details/{id}',[ProductController::class,'detailsProduct'])->name("product.details");
    Route::get('/admin/product-delete/{id}',[ProductController::class,'deleteProduct'])->name("product.delete");
    Route::get('/get-category-by-sub-category',[ProductController::class,'getCategoryBySubCategory'])->name('get-category-by-sub-category');


});
