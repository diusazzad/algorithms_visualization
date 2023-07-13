@extends('layouts.auth')

@section('content')
    <h2>Roles</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Users</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <a href="{{ route('auth.superadmin.roles.index') }}">Roles Index</a>
        {{-- <a href="{{ route('auth.superadmin.roles.create') }}">Create Role</a> --}}
        {{-- <a href="{{ route('auth.superadmin.roles.show', ['role' => $role->id]) }}">Show Role</a> --}}
        {{-- <a href="{{ route('auth.superadmin.roles.edit', ['role' => $role->id]) }}">Edit Role</a> --}}

    </table>
@endsection
