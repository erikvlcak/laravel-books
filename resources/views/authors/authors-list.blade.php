@extends ('layouts/main',['title' => 'List of authors'])

@section('content')

@include('common/flashes')

<form action="{{route('admin.create.author')}}">
    <button>Create new author</button>
</form>
<ul>
    @foreach ($results as $result)
    <li>{{$result->name}}</li>
    @endforeach
</ul>
@endsection