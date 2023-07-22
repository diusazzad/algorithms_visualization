@extends('layouts.auth')

@section('content')
    <div class="flex gap-5">
        <div class="w-1/5 bg-white h-screen border-r border-gray-200">
            <x-user.sidenav></x-user.sidenav>
        </div>
        <div class="w-3/4" id="main-content">
            @include('partials.ds.linear_data_structure_form', [
                'category' => 'Linear Data Structures',
                'dataStructures' => ['Arrays', 'Linked Lists', 'Stacks', 'Queues']
            ])

            @include('partials.ds.non_linear_data_structure_form', [
                'category' => 'Non-linear Data Structures',
                'dataStructures' => ['Trees', 'Graphs']
            ])
        </div>
    </div>
@endsection


