<?php

namespace Database\Seeders;

use App\Models\Algorithm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlgorithmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sequential Algorithms
        $sequentialAlgorithms = [
            'Linear Search',
            'Bubble Sort',
            'Insertion Sort',
            'Selection Sort',
            'Merge Sort',
            'Quick Sort',
        ];

        foreach ($sequentialAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Sequential',
                'name' => $algorithmName,
            ]);
        }

        // Recursive Algorithms
        $recursiveAlgorithms = [
            'Factorial Calculation',
            'Tower of Hanoi',
            'Binary Tree Traversal',
        ];

        foreach ($recursiveAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Recursive',
                'name' => $algorithmName,
            ]);
        }

        // Divide and Conquer Algorithms
        $divideConquerAlgorithms = [
            'Binary Search',
            'Merge Sort',
            'Quick Sort',
            "Strassen's Matrix Multiplication",
        ];

        foreach ($divideConquerAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Divide and Conquer',
                'name' => $algorithmName,
            ]);
        }

        // Greedy Algorithms
        $greedyAlgorithms = [
            'Minimum Spanning Tree',
            'Huffman Coding',
            "Dijkstra's Algorithm",
            'Knapsack Problem',
        ];

        foreach ($greedyAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Greedy',
                'name' => $algorithmName,
            ]);
        }

        // Dynamic Programming Algorithms
        $dynamicProgrammingAlgorithms = [
            'Fibonacci Series',
            'Knapsack Problem',
            'Longest Common Subsequence',
            'Matrix Chain Multiplication',
        ];

        foreach ($dynamicProgrammingAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Dynamic Programming',
                'name' => $algorithmName,
            ]);
        }

        // Backtracking Algorithms
        $backtrackingAlgorithms = [
            'N-Queens Problem',
            'Sudoku Solver',
            'Hamiltonian Cycle',
        ];

        foreach ($backtrackingAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Backtracking',
                'name' => $algorithmName,
            ]);
        }

        // Graph Algorithms
        $graphAlgorithms = [
            'Depth-First Search (DFS)',
            'Breadth-First Search (BFS)',
            "Dijkstra's Algorithm",
            "Bellman-Ford Algorithm",
            "Prim's Algorithm",
            "Kruskal's Algorithm",
        ];

        foreach ($graphAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Graph',
                'name' => $algorithmName,
            ]);
        }

        // String Matching Algorithms
        $stringMatchingAlgorithms = [
            'Naive String Matching',
            'Knuth-Morris-Pratt (KMP) Algorithm',
            'Rabin-Karp Algorithm',
        ];

        foreach ($stringMatchingAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'String Matching',
                'name' => $algorithmName,
            ]);
        }

        // Computational Geometry Algorithms
        $computationalGeometryAlgorithms = [
            'Convex Hull',
            'Line Intersection',
            'Closest Pair of Points',
        ];

        foreach ($computationalGeometryAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Computational Geometry',
                'name' => $algorithmName,
            ]);
        }

        // Randomized Algorithms
        $randomizedAlgorithms = [
            'Randomized Quicksort',
            'Randomized Primality Testing',
        ];

        foreach ($randomizedAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Randomized',
                'name' => $algorithmName,
            ]);
        }

        // Heuristic Algorithms
        $heuristicAlgorithms = [
            'Local Search Algorithms',
            'Genetic Algorithms',
            'Ant Colony Optimization',
        ];

        foreach ($heuristicAlgorithms as $algorithmName) {
            Algorithm::create([
                'category' => 'Heuristic',
                'name' => $algorithmName,
            ]);
        }
    }
}
