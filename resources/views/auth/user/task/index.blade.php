@extends('layouts.auth')

@section('content')
    <div class="flex gap-5">
        <div class="w-1/5 bg-white h-screen border-r border-gray-200">
            <x-user.sidenav></x-user.sidenav>
        </div>
        <div class="w-3/4" id="main-content">
            <h1>Task List</h1>
            <ul>
                @foreach ($tasks as $task)
                    <li>{{ $task->title }}</li>
                @endforeach
            </ul>

            <!-- Create Task Form -->
            <h2>Create Task</h2>
            <form action="{{ route('user.tasks.store') }}" method="POST">
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

            <!-- Edit Task Form -->
            <h2>Edit Task</h2>
            @foreach ($tasks as $task)
                <form action="{{ route('user.tasks.update', $task) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="edit-title">Title:</label>
                        <input type="text" name="edit-title" id="edit-title" value="{{ $task->title }}">
                    </div>
                    <div>
                        <label for="edit-description">Description:</label>
                        <textarea name="edit-description" id="edit-description">{{ $task->description }}</textarea>
                    </div>
                    <button type="submit">Update</button>
                </form>
            @endforeach
        </div>

    </div>
@endsection
