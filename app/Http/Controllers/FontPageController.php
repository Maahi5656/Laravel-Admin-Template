<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Image;

class FontPageController extends Controller
{
    //
    public function about(){
    	return view('about');
    }

    public function shop(){
         

    	return view('shop', [
    		'products' => Product::all(),
    		'categories' => Category::all(),
    	]);

    }
}
 