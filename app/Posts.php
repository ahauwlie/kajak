<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title', 'content', 'cont_sum', 'embed', 'publisher', 'created_at', 'id', 'category', 'slug', 'viewed', 'updated_at'];
}