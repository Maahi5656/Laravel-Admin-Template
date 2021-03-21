<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

use Image; 

class ProductController extends Controller
{
    //
    public function index(){ 
        $products = Product::all();
    	return view('product.index', compact('products'));
    }

    public function create(){
    	return view ('product.create',[
    		'categories' => Category::all(),
    		'brands' => Brand::all(),
    	]);
    }

    public function insert(Request $request){

    	$request->validate([
           'productImage' => 'required',
           'productName' => 'required|string',
           'brandID' => 'required|numeric',
           'categoryID' => 'required|numeric',
           'productQuantity' => 'required|numeric',
           'productPrice' => 'required|numeric',
           'productDescription' =>'max:700',
    	]);

        $image = $request->file('productImage');
    	$extension = $image->getClientOriginalExtension();
    	$newname = uniqid().".".$extension;
    	$path = base_path("public/uploads/product/".$newname);
    	Image::make($image)->resize(200, 200)->save($path);

    	  $products = new Product;
        $products->picture = $newname;
    	  $products->name = $request->productName;
        $products->brand_id = $request->brandID;
        $products->category_id = $request->categoryID;
        $products->quantity = $request->productQuantity;
        $products->price = $request->productPrice;
        $products->description = $request->productDescription;
        $products->save();

    	return redirect()->back()->with('msg','New Product Created');
    }

    public function edit($id){
    	// $products = Product::find($id);

    	return view('product.edit', [
        'products'=>Product::find($id),
        'categories'=>Category::all(),
        'brands'=>Brand::all(),
      ]);
    }

    public function update(Request $request, $id){
      $products = Product::find($id);

      $products->update([
        'name' => $request->productName,
        'brand_id' => $request->brandID,
        'category_id' => $request->categoryID,
        'quantity' => $request->productQuantity,
        'price' => $request->productPrice,
        'description' => $request->productDescription,
      ]);

      if($request->file('brandImage')){
          //unlink
          $unlink_path = base_path('public/uploads/product/'.$brand->image);
          unlink($unlink_path);

          $image = $request->file('productImage');
          $extension = $image->getClientOriginalExtension();
          $newname = uniqid().".".$extension;
          $path = base_path("public/uploads/product/".$newname);
          Image::make($image)->resize(200, 200)->save($path);

          $brand->update([
              'picture'=>$newname,
          ]);
        }
      return redirect('/product/all')->with('msg','Product Successfully Updated');
    }

    public function delete($id){
      
      Product::find($id)->delete();

      return redirect()->back()->with('msg','Product Successfully Deleted');
    }


}
