@extends ('layouts/main',['title' => 'Create new book'])

@section('content')
@include('common/errors')

@if(isset($results))
<h3>Editing book {{$results->id}}: {{$results->title}}</h3>
@endif

<form action="{{route('admin.store.book')}}" method="post">
    @csrf
    <label for="new_slug">New slug:</label>
    <input type="text" name="new_slug" id="new_slug" value="{{$results->slug ?? ''}}">
    <label for="new_title">New title:</label>
    <input type="text" name="new_title" id="new_title" value="{{$results->title ?? ''}}">
    <label for="new_price">New price:</label>
    <input type="text" name="new_price" id="new_price" value="{{$results->price ?? ''}}">
    <label for="new_language">New language:</label>
    <input type="text" name="new_language" id="new_language" value="{{$results->language ?? ''}}">
    <label for="new_isbn">New ISBN:</label>
    <input type="text" name="new_ISBN" id="new_ISBN" value="{{$results->isbn ?? ''}}">
    <button type="submit">Confirm new book</button>
</form>
<form action="{{route('admin.list.books')}}">
    <button>Back</button>
</form>
@endsection