<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function(){
    return view('welcome');
});

//  cat/index
Route::get('/categories' ,[CategoryController::class,'index'])->name('categories.index');

// cat/creat
Route::get('/categories/create' ,[CategoryController::class,'create'])->name('categories.create');

//cat/store
Route::post('/categories' ,[CategoryController::class,'store'])->name('categories.store');

//cat/show
Route::get('/categories/{category}' ,[CategoryController::class,'show'])->name('categories.show');

//cat/edit
Route::get('/categories/{category}/edit' ,[CategoryController::class,'edit'])->name('categories.edit');

//cat/update
Route::put('/categories/{category}' ,[CategoryController::class,'update'])->name('categories.update');

//cat/destroy
Route::delete('/categories{category}' ,[CategoryController::class,'destroy'])->name('categories.destroy');



//  pro/index
Route::get('/products' ,[ProductController::class,'index'])->name('products.index');

// pro/creat
Route::get('/products/create' ,[ProductController::class,'create'])->name('products.create');

//pro/store
Route::post('/products' ,[ProductController::class,'store'])->name('products.store');

//pro/show
Route::get('/products/{product}' ,[ProductController::class,'show'])->name('products.show');

//pro/edit
Route::get('/products/{product}/edit' ,[ProductController::class,'edit'])->name('products.edit');

//pro/update
Route::put('/products/{product}' ,[ProductController::class,'update'])->name('products.update');

//pro/destroy
Route::delete('/products{product}' ,[ProductController::class,'destroy'])->name('products.destroy');
