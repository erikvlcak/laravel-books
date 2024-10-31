<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
