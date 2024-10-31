@viteReactRefresh
@vite('resources/css/app.css')
@vite('resources/js/latest-books.js')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>

    <!-- <div id="root">
    </div> -->

    @include('common/navigation',['current_page' => ''])

    @if (isset($title))
    <h1 class="admin">ADMIN INTERFACE</h1>
    <h2>{{$title}}</h2>
    @endif

    @yield('content')
    @yield('register')
    @yield('login')
    @yield('review')
    @yield('search')




</body>

</html>