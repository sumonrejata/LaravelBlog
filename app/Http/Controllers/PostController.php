<?php

namespace App\Http\Controllers;
use App\Models\post;
use DB;
use App\Models\subcategory;
use App\Models\Category;
use App\Models\tag;
use illuminate\Support\Str;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //________Post view___________//
    public function create()
    {
        $tags = tag::all();
        $category = Category::all();
        return view('admin.post.create',compact('category','tags'));
    }

    //_______Post Insert_______//
    public function Store(Request $request)
    {
       

        $post = new post();
        $post->category_id = $request->category_id;
        $post->subcategory_id = $request->subcategory_id;
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->tags = $request->tags;
        $post->post_date = $request->post_date;
        $post->Tag()->attach($request->tag_name);
        $post->save();
        return $request->all();

        // $image = $request->file('image');
        // $save_url = time() . '.' .$image->getClientOriginalextension();
        // $image->move(public_path('images/'),$save_url); 
        // $post = 'images/'.$save_url;
        

    //    $post = post::create([
    //         'category_id' =>$request->category_id,
    //         'subcategory_id' =>$request->subcategory_id,
    //         'user_id' =>$request->user_id,
    //         'title' =>$request->title,
    //         'description' =>$request->description,
    //         'tags' =>$request->tags,
    //         'post_date' =>$request->post_date,   
    //     ]);
        return back();
    }











}
