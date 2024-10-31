@vite('resources/css/app.css')

<nav>
    <button class="main"><a href="{{route('home')}}">Home</a></button>
    <button class="main"><a href="{{route('about')}}">About us</a></button>
    <button class="main"><a href="{{route('searchView')}}">Search</a></button>

    @auth
    <p>Currently logged in: {{Auth::user()->name}}</p>
    <form class="logout" action="{{ route('logout') }}" method="post">
        @csrf
        <button class="logout">Logout</button>
    </form>
    @else
    <button><a href="{{route('register')}}">Register</a></button>
    <button><a href="{{route('login')}}">Login</a></button>
    @endauth

    @can('admin')
    <div class="admin-buttons">
        <button><a href="{{route('admin.list.authors')}}">Edit authors</a></button>
        <button><a href="{{route('admin.list.books')}}">Edit Books</a></button>
    </div>
    @endcan

</nav>