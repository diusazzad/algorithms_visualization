@extends('linkedlist::layouts.master')

@section('content')
    <h1>Linked List</h1>

    <p>{{ $linkedList->value }}</p>

    <a href="{{ route('linkedlist.index') }}">Back to List</a>
    <a href="{{ route('linkedlist.edit', $linkedList) }}">Edit</a>
    <form action="{{ route('linkedlist.destroy', $linkedList) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
@endsection
