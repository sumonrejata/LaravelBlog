<?php

namespace App\Http\Controllers;
use App\Models\SubCat;
use App\Models\CatPost;
use DB;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class SubCatController extends Controller
{
    
    //_______Subcategory View_______//
    public function Create()
    {
        $CatPost = CatPost::all();
        return view('admin.subcat.create',compact('CatPost'));
    }

    //______Subcategory Insert________//
    public function Store(Request $request)
    {
        $subcategory = new SubCat();
        $subcategory->category_id = $request->category_id;
        $subcategory->subcate_name = $request->subcategoryis_name;
        $subcategory->subcate_slug = Str::of($request->subcate_slug)->slug('-');
        $subcategory->save();
        return back();
    }

    //______Subcategory Show_______//
    public function index()
    {
        $subcategory = SubCat::all();
        return view('admin.subcat.index',compact('subcategory'));
    }




    //_____Subcategory show______//
    // public function index()
    // {
        
    //     return view('admin.subcat.index', compact('CatPost'));
    // }




}
