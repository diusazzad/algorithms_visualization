<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('welcome/css/welcome.css') }}">

</head>

<body class="m-1 pt-1">

    <div class="main w-full grid grid-cols-2 h-full">
        <div class="h-full" id="lsf">
            <div class=" gap-4 flex content-center text-4xl justify-center" id="nav">
                <a href="{{ url('list') }}" class="">Algorithms</a>
                <a href="" class="">Login</a>
                <a href="" class="">Register</a>

            </div>

            <div class="tracking-tighter flex flex-col pt-20 gap-20">
                <h1 class="text-8xl ">Welcome</h1>
                <p class="text-7xl mb-0 font-bold">Algorithm Visualization</p>
                <p class="text-3xl text-left">Here,Start you journey and learn with laravel Framework</p>
            </div>
            <div class="flex justify-center items-center mt-10">
                <button
                    class=" hover:bg-blue-700 text-white text-3xl font-bold py-2 px-4 rounded-3xl w-50"id="d">
                    Get Started
                </button>
            </div>
        </div>
        <div class="rsf h-full">
            <svg class="h-12 w-12 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                <path d="M3 12h18M3 6h18M3 18h18"></path>
            </svg>

            <img class="h-full w-full" src="{{ asset('welcome/img/1.jpeg') }}" alt="">
        </div>
    </div>
    <div class="p-20 pl-20">
        <footer class="border grid grid-cols-2 gap-20" id="footer">
            <div>
                <p>Contribute with use and join in github contribution.</p>

            </div>
            <div class="">
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
            </div>
        </footer>
    </div>

</body>

</html>
