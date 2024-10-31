<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    function review()
    {
        return $this->hasOne(Review::class);
    }
}
