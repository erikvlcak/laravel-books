<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class SearchController extends Controller
{

    function api_search(Request $request)
    {
        $search = $request->search;
        $result = Book::where('title', 'like', "%{$search}%")->limit(10)->get();

        return $result;
    }

    function search(Request $request)
    {
        $search = $request->search;
        $searchResult = Book::with('category')->where('title', 'like', "%{$search}%")->limit(10)->get();
        return view('/common/search', compact('searchResult'));
    }
}
