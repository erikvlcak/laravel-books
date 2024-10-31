@extends ('layouts/main',['title' => 'Create new author'])

@section('content')
@include('common/errors')

<form action="{{route('admin.store.author')}}" method="post">
    @csrf
    <label for="new_slug">New slug:</label>
    <input type="text" name="new_slug" id="new_slug">
    <label for="new_name">New name:</label>
    <input type="text" name="new_name" id="new_name">
    <label for="new_bio">New bio:</label>
    <input type="text" name="new_bio" id="new_bio">
    <button type="submit">Create new author</button>
</form>
<form action="{{route('admin.list.authors')}}">
    <button>Back</button>
</form>
@endsection