<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\CategoryController2;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\CatPostController;
use App\Http\Controllers\SubCatController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('category/create',[CategoryController::class,'Create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'Store'])->name('category.store');
Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('category/edit/{id}',[CategoryController::class,'Edit'])->name('category.edit');
Route::post('category/update/{id}',[CategoryController::class,'Update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'Destroy'])->name('category.delete');

//______Subcategory_______//
Route::get('subcategory/create',[SubcategoryController::class,'Create'])->name('subcategory.create');
Route::post('subcategory/store',[SubcategoryController::class,'Store'])->name('subcategory.store');
Route::get('subcategory/show',[SubcategoryController::class,'index'])->name('subcategory.index');
Route::get('subcategory/test',[SubcategoryController::class,'Test'])->name('subcategory.test');


//_____Category_2 Route______//
Route::get('catpost/create',[CatPostController::class,'CreateTest'])->name('catpost.create');
Route::post('catpost/store',[CatPostController::class,'StoreTest'])->name('catpost.store');
Route::get('catpost/index',[CatPostController::class,'index'])->name('catpost.index');

//____SubCats_2 Route______//

Route::get('subcat/create',[SubCatController::class,'Create'])->name('subcat.create');
Route::post('subcat/store',[SubCatController::class,'Store'])->name('subcat.store');
Route::get('subcat/index',[SubCatController::class,'index'])->name('subcat.index');



//_______Tags Route________//
Route::get('tag/create',[TagController::class,'Create'])->name('tag.create');
Route::post('tag/create',[TagController::class,'Store'])->name('tag.store');





//_______Post Route__________//

Route::get('post/create',[PostController::class,'create'])->name('post.create');
Route::post('post/create',[PostController::class,'Store'])->name('post.store');

