<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Foundation\Validation\ValidatesRequests;


class AuthorController extends Controller
{
    use ValidatesRequests;
    function index()
    {
        $results = Author::limit(200)->get();
        $current_page = 'authors';
        return view('authors/authors-list', compact('results', 'current_page'));
    }

    function create()
    {
        $current_page = 'authors';
        return view('authors/authors-create', compact('current_page'));
    }

    function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'new_name' => 'required|string',
                'new_slug' => 'required|string',
                'new_bio' => 'required|string'
            ],
            [
                'new_name.required' => 'Name field is empty.',
                'new_slug.required' => 'Slug is required.',
                'new_bio.required' => 'Bio is required.'
            ]
        );

        $newAuthor = new Author();
        $newAuthor->name = $request->new_name;
        $newAuthor->slug = $request->new_slug;
        $newAuthor->bio = $request->new_bio;
        $newAuthor->save();

        session()->flash('success_message', 'Success!');



        return redirect(route('list.authors'));
    }
}
