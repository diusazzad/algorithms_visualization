@extends('layouts.auth')

@section('content')
    <h1>Super Admin Dashboard</h1>

    <!-- Display a list of roles -->
    <h2>Roles</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a href="{{ route('auth.superadmin.roles.show', $role->id) }}">View</a>
                        <a href="{{ route('auth.superadmin.roles.edit', $role->id) }}">Edit</a>
                        <form action="{{ route('auth.superadmin.roles.destroy', $role->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this role?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
