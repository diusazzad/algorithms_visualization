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
    <link rel="stylesheet" href="{{ asset('welcome/css/welcome.css') }}">

</head>

<body class="">
    <div id="app" class="">
        <div class="m-1" id="navbar">
            <x-navBar></x-navBar>
            <x-searchBar></x-searchBar>
        </div>

        <div class="grid grid-cols-3 gap-2 mt-4 ml-4 border-2 rounded " id="main">
            <div class="shadow-2xl rounded " id="sequentialAlgorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Sequential Algorithms:</h2>
                    <ul>
                        <li class="pl-5"><a href="{{ url('linear-search') }}">Linear Search</a></li>
                        <li class="pl-5">Sorting Algorithms
                            <ul id="dot" class="tab-size-ul">
                                <li class="pl-5"><a class="" href="#bubble-sort">Bubble Sort</a></li>
                                <li class="pl-5"><a class="" href="#insertion-sort">Insertion Sort</a></li>
                                <li class="pl-5"><a class="" href="#selection-sort">Selection Sort</a></li>
                                <li class="pl-5"><a class="" href="#merge-sort">Merge Sort</a></li>
                                <li class="pl-5"><a class="" href="#quick-sort">Quick Sort</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="shadow-2xl rounded " id="recursiveAlgorithm">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Recursive Algorithms:</h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">Factorial Calculation</a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Tower of Hanoi</a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Binary Tree Traversal</a></li>
                    </ul>
                </div>
            </div>
            {{--  --}}

            <div class="shadow-2xl rounded " id="Divide and Conquer Algorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Divide and Conquer Algorithms:</h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">Binary Search</a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Merge Sort</a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Quick Sort</a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Strassen's Matrix Multiplication</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{--  --}}

            <div class="shadow-2xl rounded " id="Divide and Conquer Algorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Greedy Algorithms:</h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">Minimum Spanning Tree</a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Huffman Coding</a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Dijkstra's Algorithm</a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Knapsack Problem</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{--  --}}

            <div class="shadow-2xl rounded " id="Divide and Conquer Algorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Dynamic Programming Algorithms:</h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">Fibonacci Series</a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Knapsack Problem</a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Longest Common Subsequence</a>
                        </li>
                        <li class="pl-5"><a class="" href="#selection-sort">Matrix Chain Multiplication
                            </a>
                        </li>
                    </ul>
                </div>
            </div>



            {{--  --}}

            <div class="shadow-2xl rounded " id="Divide and Conquer Algorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Backtracking Algorithms:
                    </h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">N-Queens Problem
                            </a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Sudoku Solver
                            </a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Hamiltonian Cycle</a>
                        </li>

                    </ul>
                </div>
            </div>

            {{--  --}}

            <div class="shadow-2xl rounded " id="Divide and Conquer Algorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Graph Algorithms:
                    </h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">Depth-First Search (DFS)

                            </a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Breadth-First Search (BFS)

                            </a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Dijkstra's Algorithm</a>
                        </li>
                        <li class="pl-5"><a class="" href="#selection-sort">Bellman-Ford Algorithm
                            </a>
                        </li>
                        <li class="pl-5"><a class="" href="#selection-sort">Prim's Algorithm
                            </a>
                        </li>
                        <li class="pl-5"><a class="" href="#selection-sort">Kruskal's Algorithm</a>
                        </li>

                    </ul>
                </div>
            </div>


            {{--  --}}

            <div class="shadow-2xl rounded " id="Divide and Conquer Algorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">String Matching Algorithms:
                    </h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">Naive String Matching
                            </a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Knuth-Morris-Pratt (KMP)
                                Algorithm
                            </a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Rabin-Karp Algorithm</a>
                        </li>

                    </ul>
                </div>
            </div>

            {{--  --}}

            <div class="shadow-2xl rounded " id="Divide and Conquer Algorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Computational Geometry Algorithms::
                    </h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">Convex Hull
                            </a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Line Intersection

                            </a></li>
                        <li class="pl-5"><a class="" href="#selection-sort">Closest Pair of Points</a>
                        </li>

                    </ul>
                </div>
            </div>


            {{--  --}}

            <div class="shadow-2xl rounded " id="Divide and Conquer Algorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Randomized Algorithms:

                    </h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">Randomized Quicksort
                            </a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Randomized Primality Testing


                            </a></li>

                    </ul>
                </div>
            </div>

            {{--  --}}

            <div class="shadow-2xl rounded " id="Divide and Conquer Algorithms">
                <div class="border p-1 m-1 rounded">
                    <h2 class="text-2xl font-bold mb-4 border p-1 m-1 rounded">Heuristic Algorithms:


                    </h2>
                    <ul id="dot" class="tab-size-ul">
                        <li class="pl-5"><a class="" href="#bubble-sort">Local Search Algorithms
                            </a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Genetic Algorithms
                            </a></li>
                        <li class="pl-5"><a class="" href="#insertion-sort">Ant Colony Optimization
                            </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
