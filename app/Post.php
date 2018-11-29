<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;//to add builder phares

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
}
