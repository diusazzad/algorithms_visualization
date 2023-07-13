@extends('layouts.auth')

@section('content')
    <h1>Users</h1>
    <table>
            @foreach ($users as $user)
                <p>User: {{ $user->name }}</p>
            @endforeach

            <p>Additional Data: {{ $data }}</p>

            {{ $users->links() }}
    </table>

    <div class="createRole">
        <a href="{{ route('roles.create') }}">Create Role</a>
    </div>
@endsection
