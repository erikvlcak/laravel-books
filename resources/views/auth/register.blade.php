@extends('layouts/main')
@include('common/errors')
@section('register')
<form action="{{ route('register') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}">

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="">

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" value="">

    <button>Register</button>
</form>
@endsection