@extends('linkedlist::layouts.master')

@section('content')
    <h1>Linked List Traversal</h1>

    <ul>
        @foreach ($elements as $element)
            <li>{{ $element }}</li>
        @endforeach
    </ul>

    <a href="{{ route('linkedlist.show', $linkedList) }}">Back to Linked List</a>
@endsection
