@extends('layouts.auth')

@section('content')
    <div class="flex gap-5">
        <div class="w-1/5 bg-white h-screen  ">
            <x-user.sidenav></x-user.sidenav>
        </div>
        <div class="w-3/4" id="main-content">
            <div id="app" class="">
                <div class="m-1" id="navbar">
                    {{-- <x-searchBar></x-searchBar> --}}
                    <x-user.algorithm-search />
                </div>
            </div>
        </div>
    </div>
@endsection
