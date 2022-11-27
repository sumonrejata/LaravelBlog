<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\subcategory;
use App\Models\User;
use App\Models\tag;
use illuminate\Support\Str;

class TagController extends Controller
{
    public function Create()
    {
        return view('admin.tags.create');
    }

    //______Tags Insert______//
    public function Store(Request $request)
    {
        tag::create([
            'tag_name' =>$request->tag_name,
        ]);
        return back();
    }




}
