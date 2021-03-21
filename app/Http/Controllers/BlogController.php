<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

use Image;

class BlogController extends Controller
{
    //
    public function index(){

    	$blogs = Blog::all();
        
        return view('blog.index',compact('blogs'));
    }

    public function create(){

    	return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'blogImage' => 'required',
            'blogName' => 'required',
            'blogDescription' => 'required',
        ]);

        $image = $request->file('blogImage');
        $extension = $image->getClientOriginalExtension();
        $newname = uniqid().".".$extension;
        $path = base_path("public/uploads/blog/".$newname);
        Image::make($image)->resize(500,500)->save($path);

        $blog = new Blog;
        $blog->image = $newname;
        $blog->title = $request->blogName;
        $blog->details = $request->blogDescription;

        $blog->save();
        
        return redirect()->back()->with('msg','New Blog Created Successfully');


    }



}
