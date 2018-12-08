<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;


    protected $fillable = ['category_id', 'title', 'content','image_path', 'file_url'];
}
