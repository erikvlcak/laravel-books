<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function books()
    {
        return $this->belongsTo(Book::class);
    }

    function user()
    {
        return $this->belongsTo(Users::class);
    }
}
