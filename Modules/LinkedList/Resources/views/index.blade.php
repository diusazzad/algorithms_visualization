@extends('linkedlist::layouts.master')

@section('content')
    <div class="container">
        <h1>Create Linked List</h1>

        <form action="{{ route('linked-list.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="value">Value</label>
                <input type="text" name="value" id="value" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
