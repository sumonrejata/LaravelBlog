<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategoryis_name',
        'subcategoryis_slug',
    ];

    public function Category_Name()
    {
    
        //return $this->hasOne(Category::class, 'category_id', 'id');
        return $this->belongsTo(Category::class,'category_id','id');
    }

    
}
