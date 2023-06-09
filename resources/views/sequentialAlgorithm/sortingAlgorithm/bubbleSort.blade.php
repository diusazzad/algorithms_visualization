<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Bubble Sort</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')

</head>

<body>

    <div class="main ">
        <div class="description">
            <h1>Bubble Sort Algorithm</h1>

            <p>Input Array: [5, 3, 8, 1, 2]</p>
        </div>
        <div class="output">
            <p>Sorted Array:
                @foreach ($sortedArray as $value)
                    {{ $value }}
                @endforeach
            </p>
        </div>
    </div>




</body>
