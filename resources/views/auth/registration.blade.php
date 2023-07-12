@extends('layouts.auth')


@section('content')
    <h1>Regisration</h1>
    <form action="{{ route('auth.register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="border-2 border-black">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="border-2 border-black">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>


        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="border-2 border-black">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="role">Role:</label>
            <select name="role" id="role" class="border-2 border-black">

                <option value="" selected disabled>Choose</option>
                <option value="superadmin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <option value="user">User</option>
            </select>
            @error('role')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="border-2 border-black">
            @error('password')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="border-2 border-black">
        </div>
        <button type="submit" class="border-2 border-black">Register</button>
    </form>
@endsection
