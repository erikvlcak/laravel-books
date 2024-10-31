<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class LatestBookController extends Controller
{
    function latest()
    {
        $user = Auth::user();
        return view('index/index', compact('user'));
    }
}
