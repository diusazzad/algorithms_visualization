@extends('linkedlist::layouts.master')

@section('content')
    <h1>Linked Lists</h1>

    <ul>
        @foreach ($linkedLists as $linkedList)
            <li>
                <a href="{{ route('linkedlist.show', $linkedList) }}">{{ $linkedList->value }}</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('linkedlist.create') }}">Create New Linked List</a>
@endsection
