<?php

namespace App\Http\Controllers;
use App\Models\CatPost;
use DB;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class CatPostController extends Controller
{
    
    public function CreateTest()
    {
        return view('admin.catpost.create');
    }

    //______CatPost Insert Query________//
    public function StoreTest(Request $request)
    {
        CatPost::create([
            'catpost_name' =>$request->catpost_name,
            'catpost_slug' =>Str::of($request->catpost_name)->slug('-'),
        ]);
        return back();
    }

    //______CatPost Show Query________//
    public function index()
    {
        $CatPost = DB::table('cat_posts')->get();
        return view('admin.catpost.index', compact('CatPost'));
    }








}
