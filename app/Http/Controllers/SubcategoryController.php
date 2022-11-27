<?php

namespace App\Http\Controllers;
use App\Models\subcategory;
use App\Models\Category;
use DB;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function Create()
    {
        $category = Category::all();
        return view('admin.subcategory.create', compact('category'));
    }

    //___Sub Category store___//
    public function Store(Request $request)
    {
        $subcategory = new subcategory();
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategoryis_name = $request->subcategoryis_name;
        $subcategory->subcategoryis_slug = Str::of($request->subcategoryis_slug)->slug('-');
        $subcategory->save();

        // subcategory::create([
        //     'category_id' =>$request->category_id,
        //     'subcategoryis_name' =>$request->subcategory_name,
        //     'subcategoryis_slug' =>Str::of($request->subcategoryis_slug)->slug('-'),
            
        // ]);
        return back();
    }


    public function index()
    {
        $category = subcategory::all();
        return view('admin.subcategory.index', compact('category'));
        //return 'Subcategory show';
    }



    public function Test()
    {
        return 'testing';
    }








}
