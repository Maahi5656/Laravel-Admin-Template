<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all();

        return view('category.index', compact('category'));        

    }

    public function index2() {
        return  view('category.index2');
    }


    public function jsonCategory() {
        $category = Category::all();

        return response()->json($category);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
                'categoryImage' => 'required',
                'categoryName' => 'required',
            ]);

            $image = $request->file('categoryImage');
            $extension = $image->getClientOriginalExtension();
            $name = uniqid().".".$extension;
            $path = base_path("public/uploads/category/".$name);
            Image::make($image)->resize(200,200)->save($path);

            $category = new Category;
            $category->image = $name;
            $category->name = $request->categoryName;

            $category->save();

            return redirect()->back()->with('msg','Successfully Added New Category');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category = Category::find($id);

       return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
           $category = Category::find($id);
           
           $category->update([
              'name' => $request->categoryName,
           ]);
           
           if($request->file('cateoryImage'))
           {
                $unlink_path = base_path('public/uploads/category/'.$category->image);
                unlink($unlink_path);

                $image = $request->file('cateoryImage');
                $extension = $image->getClientOriginalExtension();
                $newname = uniqid().".".$extension;
                $path = base_path("public/uploads/brand/".$newname);
                Image::make($image)->resize(200, 200)->save($path);

                $category->update([
                   'image' => $request->cateoryImage,
                ]);
           }

           return redirect('/category/all')->with('msg','Category Successfully Updated');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Category::find($id)->delete();

        return redirect()->back()->with('msg','Successfully Deleted New Category');        
    }
}
