<!-- @vite('resources/js/latest-books.js')
@vite('resources/css/app.css') -->
<!-- @extends('layouts/main',['current_page' => 'home']) -->

@section('content')

@auth
<h1>Welcome, {{$user->name}}</h1>
@else
<h1>Welcome</h1>
@endauth

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

<!-- <ul id="latest-books"></ul> -->


@endsection