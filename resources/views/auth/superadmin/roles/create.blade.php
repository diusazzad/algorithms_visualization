@extends('layouts.auth')

@section('content')
    <h1>Create Role</h1>

    <form action="{{ route('superadmin.roles.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Role Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
