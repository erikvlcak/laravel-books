<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Book extends Model
{
    function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
