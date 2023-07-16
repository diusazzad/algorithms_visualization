@extends('layouts.auth')

@section('content')
    <div class="flex gap-5">
        <div class="w-1/5 bg-white h-screen border-r border-gray-200">
            <x-user.sidenav></x-user.sidenav>
        </div>
        <div class="w-3/4 m-3 grid grid-cols-3 gap-1 bg-emerald-50 p-1" id="main-content">
            <!-- Index Task -->

            <div class="bg-slate-400 h-fit">
                <h1 class="text-center underline-offset-2">Task List</h1>
                <div class="">
                    <ul class="w-fit rounded ">
                        @foreach ($tasks as $task)
                            <li>{{ $task->title }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <!-- Create Task Form -->
            <div class="bg-red-300 h-fit p-1">
                <h2>Create Task</h2>
                <div class="">
                    <form action="{{ route('user.tasks.store') }}" method="POST">
                        @csrf
                        <div class="">
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div class="">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description"></textarea>
                        </div>
                        <button class="border rounded-2xl" type="submit">Create</button>
                    </form>
                </div>
            </div>


            <!-- Edit Task Form -->
            <div class="bg-lime-100 h-fit p-1">
                <h2>Edit Task</h2>
                <div class="">
                    @foreach ($tasks as $task)
                        <form action="{{ route('user.tasks.update', $task) }}" method="POST" class="">
                            @csrf
                            @method('PUT')
                            <div class="">
                                <label for="edit-title">Title:</label>
                                <input type="text" name="edit-title" id="edit-title" value="{{ $task->title }}">
                            </div>
                            <div class="">
                                <label for="edit-description">Description:</label>
                                <textarea name="edit-description" id="edit-description">{{ $task->description }}</textarea>
                            </div>
                            <button class="" type="submit">Update</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
