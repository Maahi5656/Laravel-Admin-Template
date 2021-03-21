<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\FontPageController;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Blog;
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

Route::get('/', [FontPageController::class, 'index']);

Route::get('/about', [FontPageController::class, 'about']) ;

Route::get('/shop', [FontPageController::class, 'shop']);
Route::get('/shop/{id}', [FontPageController::class, 'shopByCategory']);

Route::get('/blog-page',[FontPageController::class, 'blog']);
Route::get('/blog-page/{id}', [FontPageController::class, 'blog_details']);

Route::get('/blog/all', [BlogController::class, 'index']);
Route::get('/blog', [BlogController::class, 'create']);
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

Route::get('/cart', function(){
   return view('cart');
});

Route::get('/checkout', function(){
  return view('checkout'); 
});

Route::get('/wishlist', function(){
  return view('wishlist'); 
});

Route::get('/contact', function(){
  return view('contact'); 
});


// Route::get('/blog-details', function(){
//   return view('blog-details'); 
// });

Route::get('/product-details', function(){
  return view('product-details');
});

Route::get('/product-details/{id}', [FontPageController::class, 'details']);

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

//Product
Route::get('/product/all', [ProductController::class, 'index']);

Route::get('/product', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'insert'])->name('product.insert');

Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/edit/{id}', [ProductController::class, 'update']);

Route::get('/product/delete/{id}', [ProductController::class, 'delete']);


