<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

use App\Models\Category;
use App\Models\Brand;

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

Auth::routes(['verify' => true]);
  
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Brand
Route::get('/brand/all', [BrandController::class, 'index']);

Route::get('/brand', [BrandController::class, 'create']);
Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');

Route::get('/brand/edit/{id}', [BrandController::class, 'edit']);
Route::post('/brand/edit/{id}', [BrandController::class, 'update']);

Route::get('/brand/delete/{id}', [BrandController::class, 'destroy']);

//Category
Route::get('/category/all', [CategoryController::class, 'index']);

Route::get('/category', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/edit/{id}', [CategoryController::class, 'update']);

Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);


