@extends ('layouts/main',['title' => 'List of books'])

@section('content')

@include('common/flashes')

<form action="{{route('admin.create.book')}}">
    <button>Create new book</button>
</form>
<ul>
    @foreach ($results as $result)
    <li>ID {{$result->id}}: {{$result->title}}</li>
    @endforeach
</ul>
@endsection