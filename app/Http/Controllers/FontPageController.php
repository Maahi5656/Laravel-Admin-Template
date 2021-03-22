<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Comment;

use Image;

class FontPageController extends Controller
{
    //
    public function index()
    {
       
       return view('index',[
       	    'categories' => Category::all(),
    		'limitedProduct' => Product::limit(4)->get(),       	
            'products' => Product::all(),
       ]);
    }


    public function about(){

    	return view('about');
    }

    public function shop(){
         
    	return view('shop', [
    		'products' => Product::all(),
    		'categories' => Category::all(),
    	]);

    }

    public function shopByCategory($id){
         $categoryProducts = Category::find($id);

        return view('shop-page', [ 
            'products' => Product::where('category_id',$categoryProducts->id)->get(), 
        	'categories' => $categoryProducts,
        ]);
    }

    public function details($id){

    	$product = Product::find($id);
        return view('product-details', [
           
           'details' => $product,
           'relatedProduct' => Product::where('category_id',$product->category_id)->get(),
        ]);
    }


    public function blog(){
        
        $blogs = Blog::all();
    	return view('blog',compact('blogs'));
    }

    public function blog_details($id){

    	return view('blog-details', [
    		'blogs' => Blog::find($id),
            'comments' => Comment::where('blog_id',$id)->get(),

        ]);
    }

    public function post_comment(Request $request){
       
        $request->validate([           
           'name' => 'required|string',
           'email' => 'required',
           'comment' => 'required',
        ]);

        $comments = new Comment;
        $comments->name = $request->name;
        $comments->email = $request->email;
        $comments->details = $request->comment;
        $comments->blog_id = $request->blogID;

        $comments->save(); 
        
        return redirect()->back()->with('msg','Message Successfully Sent');
    }

    public function all_comment(){

    	return view('comments.index',[
          'comments' => Comment::all(),
    	]);
    }



}
 