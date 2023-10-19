@extends('layouts.app')

@section('content')
    <h1>Create Linked List</h1>

    <form action="{{ route('linkedlist.store') }}" method="post">
        @csrf

        <input type="text" name="value" placeholder="Enter a value">

        <button type="submit">Create</button>
    </form>
@endsection
