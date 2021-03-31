<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CartController extends Controller
{
    

	public function addToCart(Request $request) {

		$cart = session()->get('cart');

		$product = Product::findOrFail($request->product_id);
		
		if(!$cart) {
			$cart[$request->product_id] = [
				'product_id' => $request->product_id,
				'qty' => $request->qty,
				'price' => $product->price,
				'total' => $request->qty * $product->price,
			];

			// Store The Product Cart Into cart Session
			session()->put('cart',$cart);
		}


		if(isset($cart[$request->product_id])) {
				$cart[$request->product_id]['qty'] +=  $request->qty;
				$cart[$request->product_id]['total'] += ($request->qty * $cart[$request->product_id]['price'] );

				session()->put('cart',$cart);
			}



		$cart[$request->product_id] = [
			'product_id' => $request->product_id,
			'qty' => $request->qty,
			'price' => $product->price,
			'total' => $request->qty * $product->price,
		];
		session()->put('cart',$cart);	
		return back();

	}


	public function destroy($cart_id) 
	{

		$cart = session()->get('cart');
		unset($cart[$cart_id]);

		session()->put('cart',$cart);
		return back();

	}

	public function showCart(){

		$carts = session()->get('cart');

		return view('cart',compact('carts'));
	} 

	public function checkout(){
		$carts = session()->get('cart');

		return view('checkout',compact('carts'));
	}

}
