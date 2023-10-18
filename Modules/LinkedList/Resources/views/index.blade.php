@extends('linkedlist::layouts.master')

@section('content')
    {{-- <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('linkedlist.name') !!}
    </p> --}}
    <div class="container">
        <h2>Add Value to Linked List</h2>

        <!-- Display existing linked list values -->
        <h3>Existing Values:</h3>
        <ul>
            @foreach ($existingValues as $value)
                <li>{{ $value }}</li>
            @endforeach
        </ul>

        <!-- Form to add a new value -->
        <form method="post" action="{{ route('linkedlist.store') }}">
            @csrf <!-- CSRF token for security -->
            <label for="value">Enter Value:</label>
            <input type="text" name="value" id="value">
            <button type="submit">Add Value</button>
        </form>

    </div>
@endsection
