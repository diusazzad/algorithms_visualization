@extends('layouts.auth')

@section('content')
    <h1>Login</h1>
    <form action="{{ route('test.auth.login') }}" class="">
        <div class="">
            <label for="email">Email</label>
            <input class="border-2 border-black" type="email" name="email" id="email">
        </div>

        <div class="">
            <label for="password">Password</label>
            <input class="border-2 border-black" type="password" name="password" id="password">
        </div>

        <button type="submit" class="border border-black">Login</button>
    </form>
@endsection
