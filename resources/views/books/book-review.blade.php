@extends('layouts/main')

@section('review')
<h1>Reviews</h1>
<p><strong>Book title:</strong> {{$book->title}}</p>
<p><strong>Category: </strong>{{$book->category?->name}}</p>
<p><strong>Price: </strong>{{$book->price}} EUR</p>
<img src="{{$book->image}}" alt="">

<p>Leave a review</p>
@auth
<form action="{{route('review.submit',['book_id' => $book->id])}}" method="post">
    @csrf
    <textarea name="review" id="review"></textarea>
    <button>Submit text</button>
</form>
@else
<p>You must be logged in to leave a review</p>
@endauth

@include('common/errors')
@include('common/flashes')

<ul>
    @if(isset($book->reviews))
    @foreach ($book->reviews as $review)
    <div>{{$review->user->name}}: {{$review->text}}</div>
    @endforeach
    @endif
</ul>

@endsection