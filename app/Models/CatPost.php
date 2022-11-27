<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'catpost_name',
        'catpost_slug',
    ];
}
