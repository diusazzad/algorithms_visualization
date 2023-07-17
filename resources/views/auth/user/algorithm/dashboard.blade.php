@extends('layouts.auth')

@section('content')
    <div class="flex gap-5">
        <div class="w-1/5 bg-white h-screen border-r border-gray-200">
            <x-user.sidenav></x-user.sidenav>
        </div>
        <div class="w-3/4" id="main-content">
            <div class=" mt-2">
                <h1>Sequencial Algorith</h1>
                <x-algorithm.linear-search />
            </div>
            <div class="border">
                <h1 class="text-center">Sorting Algorithm</h1>
                <div class="grid grid-cols-4">
                    <div class="">Bubble Sort</div>
                    <div class="">Insertion Sort</div>
                    <div class="">Selection Sort</div>
                    <div class="">Merge Sort</div>
                    <div class="">Quick Sort</div>
                </div>
            </div>
        </div>
    </div>
@endsection
