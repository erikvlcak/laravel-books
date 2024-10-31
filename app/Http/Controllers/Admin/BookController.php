<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    use ValidatesRequests;



    function submit(Request $request)
    {
        $this->validate($request, [
            'review' => 'required|max:225',
        ], [
            'review.reqired' => 'Review must not be empty.',
            'review.max' => 'Maximum length of review is 225 characters.'
        ]);

        $existingReview = Review::where('book_id', $request->book_id)
            ->where('user_id', Auth::id())
            ->first();

        if ($existingReview) {
            session()->flash('message', 'You have already reviewed this book!');
            return redirect(route('book.show', ['book_id' => $request->book_id]));
        } else {
            $new_review = new Review();
            $new_review->book_id = $request->book_id;
            $new_review->user_id = Auth::id();
            $new_review->text = $request->review;
            $new_review->save();
            session()->flash('message', 'Review created!');
            return redirect(route('book.show', ['book_id' => $request->book_id]));
        }
    }

    function show(Request $request)
    {
        $show_id = $request->book_id;
        $book = Book::with(['category', 'reviews'])->find($show_id);
        return view('books/book-review', compact('book'));
    }

    function index()
    {
        $results = Book::limit(200)->get();
        $current_page = 'books';
        return view('books/books-list', compact('results', 'current_page'));
    }

    function create()
    {
        $current_page = 'books';
        return view('books/books-create', compact('current_page'));
    }

    function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'new_slug' => 'required|string',
                'new_title' => 'required|string',
                'new_price' => 'required|numeric',
                'new_language' => 'required|string',
                'new_ISBN' => 'required|string'
            ],
            [
                'new_slug.required' => 'Slug is required.',
                'new_title.required' => 'Title is required.',
                'new_price.required' => 'Price is required.',
                'new_price.numeric' => 'Price must be a number.',
                'new_language.required' => 'Language is required.',
                'new_ISBN.required' => 'ISBN is required.'
            ]
        );

        session()->flash('success_message', 'Success!');

        $newData = new Book();
        $newData->slug = $request->new_slug;
        $newData->title = $request->new_title;
        $newData->price = $request->new_price;
        $newData->language = $request->new_language;
        $newData->isbn = $request->new_ISBN;
        $newData->save();

        return redirect(route('list.books'));
    }

    function edit(Request $request)
    {
        $editId = $request->book_id;
        $results = Book::where('id', '=', $editId)->first();
        $current_page = 'books';
        return view('books/books-edit', compact('results', 'current_page'));
    }

    function update(Request $request)
    {
        $this->validate(
            $request,
            [
                'new_slug' => 'required|string',
                'new_title' => 'required|string',
                'new_price' => 'required|numeric',
                'new_language' => 'required|string',
                'new_ISBN' => 'required|string'
            ],
            [
                'new_slug.required' => 'Slug is required.',
                'new_title.required' => 'Title is required.',
                'new_price.required' => 'Price is required.',
                'new_price.numeric' => 'Price must be a number.',
                'new_language.required' => 'Language is required.',
                'new_ISBN.required' => 'ISBN is required.'
            ]
        );


        $book = Book::find($request->book_id);
        $book->slug = $request->new_slug;
        $book->title = $request->new_title;
        $book->price = $request->new_price;
        $book->language = $request->new_language;
        $book->isbn = $request->new_ISBN;
        $book->save();

        session()->flash('success_message', 'Book updated successfully!');

        return redirect(route('list.books'));
    }
}
