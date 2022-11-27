<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function Create()
    {
        return view('admin.category.create');
    }

    public function Store(Request $request)
    {
        Category::create([
            'category_name' =>$request->category_name,
            'category_slug' =>Str::of($request->category_name)->slug('-'),
            
        ]);
        return back();
    }


    public function index()
    {
        //$category = DB::table('categories')->get();
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }

    //______Update Query______//
    public function Edit($id)
    {
        //$data = DB::table('categories')->where('id',$id)->first();
        $data=Category::find($id);
        return view('admin.category.edit',compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $category = Category::find($id);
        $category->update([
            'category_name' =>$request->category_name,
            'category_slug' =>Str::of($request->category_name)->slug('-'),
        ]);
        //return redirect()->route('category.index');
        //$notification = array('messege' =>'Category Inserted!', 'alert-type' =>'success');
        $notification = array(
            'message' => 'Category created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    //____Delete Query____//
    public function Destroy($id)
    {
        //DB::table('categories')->where('id',$id)->delete();
        // $category = Category::find($id);
        // $category->delete();
        Category::destroy($id);
        return redirect()->back();
    }



    // public function Create2()
    // {
    //     return view('admin.category2.create');
    // }

    // public function Store2(Request $request)
    // {
    //     //return dd($request);
    //     Category2::create([
    //         'category_name' =>$request->category_name,
    //         'category_slug' =>Str::of($request->category_name)->slug('-'),
    //     ]);
    //     return back();
    // }














}
