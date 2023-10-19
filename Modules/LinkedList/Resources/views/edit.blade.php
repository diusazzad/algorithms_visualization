@extends('linkedlist::layouts.master')

@section('content')
    <h1>Edit Linked List</h1>

    <form action="{{ route('linkedlist.update', $linkedList) }}" method="post">
        @csrf
        @method('put')

        <input type="text" name="value" value="{{ $linkedList->value }}" placeholder="Enter a value">

        <button type="submit">Update</button>
    </form>
@endsection
