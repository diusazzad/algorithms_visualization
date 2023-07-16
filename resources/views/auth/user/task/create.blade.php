@extends('layouts.auth')

@section('content')
    <div class="flex gap-5">
        <div class="w-1/5 bg-white h-screen border-r border-gray-200">
            <x-user.sidenav></x-user.sidenav>
        </div>
        <div class="w-3/4" id="main-content">
            <h1>Create Task</h1>
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title">
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea name="description" id="description"></textarea>
                </div>
                <button type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection
