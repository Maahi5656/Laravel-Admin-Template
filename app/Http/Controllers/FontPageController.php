<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Comment;

use DB;
 
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

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }


    public function search(Request $request){

    	if($request->ajax()){

            //$categoryId = Category::find($id);
            $output = "";
    		$products = DB::table('products')->where('name','like','%'.$request->productSearch.'%')
    		                      			 ->orWhere('price','like','%'.$request->productSearch.'%')->get();

			// return view('shop-page', ['products'=>$data]);

    		if($products){
                // $image = 
    			foreach($products as $product){
    				$output .=                                
    				'<li class="col-xl-3 col-lg-4 col-sm-6 col-12 border border-secondary pt-3 m-2">'.
                        '<div class="product-wrap">'.
                            '<div class="product-img">'.
                                '<span>Sale</span>'.
                                '<img src="uploads/product/$product->picture"; alt="">'.
                                '<div class="product-icon flex-style">'.
                                    '<ul>'.
                                        '<li>'.
                                        	'<a href=""/product-details/".$product->id">'.
                                        		'<i class="fa fa-eye"></i></a></li>'.
                                                    '<li>'.
                                                    '<a href="wishlist.html"><i class="fa fa-heart">'.
                                                    '</li>'.
                                                '</i>'.
                                        	'</a>'.
                                    	'</li>'.
                                        '<li>'.
                                        	'<a href="cart.html"><i class="fa fa-shopping-bag"></i></a>'.
                                        '</li>'.
                                    '</ul>'.
                                '</div>'.
                            '</div>'.
                        	'<div class="product-content">'.
                            	'<h3><a href="single-product.html">'.$product->name.'</a></h3>'.
                                    '<p class="pull-left">'.$product->price.'</p>'.
                        	'</div>'.
                    	'</div>'.
                    '</li> ';
    			}

    			return Response($output);
    		}


    	}


    }



}
 