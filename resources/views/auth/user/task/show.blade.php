@extends('layouts.auth')

@section('content')
    <div class="flex gap-5">
        <div class="w-1/5 bg-white h-screen border-r border-gray-200">
            <x-user.sidenav></x-user.sidenav>
        </div>
        <div class="w-3/4" id="main-content">
            <h1>Task Details</h1>
            <h2>{{ $task->title }}</h2>
            <p>{{ $task->description }}</p>
            <p>Created At: {{ $task->created_at }}</p>
        </div>
    </div>
@endsection
