@extends('layouts.auth')

@section('content')
    <h1>Edit Role: {{ $role->name }}</h1>

    <form action="{{ route('superadmin.roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Role Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $role->name }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
