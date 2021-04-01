<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class CustomerController extends Controller
{
    //
    public function insert(Request $request){

    	$request->validate([
          
          'userName' => 'required',
          'userEmail' => 'required',
          'userPassword' => 'required|required_with:confirmPassword|same:confirmPassword',
          'confirmPassword' => 'required',

    	]);

    	DB::table('users')->insert([
         	'name' => $request->userName,
         	'email' => $request->userEmail,
         	'password'=> Hash::make($request->userPassword),
    	]);

    	return redirect()->back()->with('msg','Successfully Registered');

    }

    public function index(){
        return view('customer.dashboard');
    }
}
