<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\subcategory;
use App\Models\User;
use illuminate\Support\Str;


class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'user_id',
        'title',
        'slug',
        'description',
        'image',
        'tags',
        'status',
        'views',
        'post_date',
        'tag_name',
        'tag_name',
        'tag_name',
    ];

    //______Join With Category________//

    public function Category_Name()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    //______Join With SubCategory________//
    public function subcategory()
    {
        return $this->belongsTo(subcategory::class,'subcategory_id','id');
    }

    //______Join With User______//
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    //_______Join With Tags_________//
    public function Tag()
    {
        return $this->belongsToMany(tag::class);
    }





}
