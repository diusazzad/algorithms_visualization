<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')


</head>

<body class="">
    <div id="app" class="">
        <div class="m-1" id="navbar">
             <x-navBar></x-navBar>
             <x-searchBar></x-searchBar>
        </div>

        <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
                <h2 class="text-2xl font-bold mb-4">Sequential Algorithms:</h2>
                <ul>
                    <li>Linear Search</li>
                    <li>Bubble Sort</li>
                    <li>Insertion Sort</li>
                    <li>Selection Sort</li>
                    <li>Merge Sort</li>
                    <li>Quick Sort</li>
                </ul>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-4">Recursive Algorithms:</h2>
                <ul>
                    <li>Factorial Calculation</li>
                    <li>Tower of Hanoi</li>
                    <li>Binary Tree Traversal</li>
                </ul>
            </div>
            <!-- Add more algorithm categories here -->
        </div>
     </div>
</body>

</html>
