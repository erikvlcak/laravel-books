@extends('layouts/main')
@include('common/errors')
@section('login')
<form action="{{ route('login') }}" method="post">
    @csrf
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}">

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="">

    <button>Confirm</button>
</form>
@endsection