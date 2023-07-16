@extends('layouts.auth')

@section('content')
    <div class="flex gap-5">
        <div class="w-1/5 bg-white h-screen border-r border-gray-200">
            <x-user.sidenav></x-user.sidenav>
        </div>
        <div class="w-3/4" id="main-content">
            <h1>Edit Task</h1>
            <form action="{{ route('tasks.update', $task) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="{{ $task->title }}">
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea name="description" id="description">{{ $task->description }}</textarea>
                </div>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection
