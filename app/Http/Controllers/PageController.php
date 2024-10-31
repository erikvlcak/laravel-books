<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function showAboutUs()
    {
        return view('about/about-us');
    }
}
