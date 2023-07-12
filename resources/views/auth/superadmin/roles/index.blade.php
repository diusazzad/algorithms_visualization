@extends('layouts.auth')

@section('content')
    <h1>Manage Roles</h1>

    <a href="{{ route('superadmin.roles.create') }}" class="btn btn-primary">Create Role</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a href="{{ route('superadmin.roles.edit', $role) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('superadmin.roles.destroy', $role) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
