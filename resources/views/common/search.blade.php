<!-- @vite('resources/js/book-search.js') -->
@extends('layouts/main')

@section('search')


<form action="{{route('search')}}" method="post">
    @csrf
    <label for="search">Search book: </label>
    <input type="text" name="search" id="search">
    <button>Search!</button>
</form>

@if (isset($searchResult))
@foreach ($searchResult as $result)
<p>Title: {{$result->title}}</p>
<img src="{{$result->image}}" alt="cover">
<p>Category: {{$result->category?->name}}</p>
<p>Publication date: {{$result->publication_date}}</p>
<p>Language: {{$result->language}}</p>
<p>Pges: {{$result->pages}}</p>
<form action="{{route('book.show', ['book_id' => $result->id])}}">
    <button>View reviews</button>
</form>
<p>===</p>
@endforeach
@endif

@endsection