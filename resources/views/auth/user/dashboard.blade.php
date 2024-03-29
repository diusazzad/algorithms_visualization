@extends('layouts.auth')

@section('content')
    <div class="flex gap-5">
        <div class="w-1/5 bg-white h-screen border-r border-gray-200">
            <x-user.sidenav></x-user.sidenav>
        </div>
        <div class="w-3/4" id="main-content">
            <div class="">
                Hello, Welcome to Algorith visualization .
                <x-user.algolist/>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.nav-link').on('click', function(e) {
            e.preventDefault();

            const href = $(this).attr('href');

            fetchContent(href)
                .then(content => {
                    $('#main-content').html(content);
                })
                .catch(error => {
                    console.error(error);
                });
        });

        function fetchContent(href) {
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: href,
                    method: 'GET',
                    success: function(response) {
                        resolve(response);
                    },
                    error: function(xhr, status, error) {
                        reject(error);
                    }
                });
            });
        }
    </script>
@endsection


