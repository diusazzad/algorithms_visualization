<?php

namespace App\Http\Controllers\sequentialAlgorithm\sortingAlgorithm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bubbleSort extends Controller
{
    public function bubbleSort()
    {
        $arr = [5, 3, 8, 1, 2];

        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    // Swap elements
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        // Display the sorted array
        echo "Sorted Array: ";
        for ($i = 0; $i < $n; $i++) {
            echo $arr[$i] . " ";
        }
      return view('sequentialAlgorithm.sortingAlgorithm.bubbleSort', ['sortedArray' => $arr]);
    }
}
