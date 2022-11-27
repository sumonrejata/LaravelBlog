<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCat extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcate_name',
        'subcate_slug',
    ];

    public function Category_name()
    {
        return $this->belongsTo(CatPost::class,'category_id','id');
    }


}
