@extends('layouts.auth')

@section('content')
    <h1>Login</h1>
    <form action="{{ route('auth.login') }}" method="POST">
        @csrf
        <div class="">
            <h1>recapcha = not done</h1>
            <label for="email">Email</label>
            <input class="border-2 border-black" type="email" name="email" id="email">
        </div>

        <div class="">
            <label for="password">Password</label>
            <input class="border-2 border-black" type="password" name="password" id="password">
        </div>

        <button type="submit" class="border border-black">Login</button>
    </form>
    <div>or<br>
        <a href="{{ route('auth.register') }}" class="border-2 border-black">Register</a>
    </div>


@endsection
