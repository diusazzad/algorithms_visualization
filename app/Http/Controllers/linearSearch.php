<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linearSearch extends Controller
{
    public function search(Request $request)
    {
        $array = $request->input('array');
        $target = $request->input('target');

        // Convert the input string to an array of numbers
        $numbers = explode(',', $array);

        $steps = [];
        $found = false;
        $i = 0;

        // Perform linear search
        foreach ($numbers as $index => $currentNumber) {
            $step = [
                'index' => $index,
                'number' => $currentNumber,
                'isTarget' => $currentNumber == $target,
            ];

            $steps[] = $step;

            if ($currentNumber == $target) {
                $found = true;
                $i = $index;
                break;
            }
        }

        // Prepare the message based on the search result
        if ($found) {
            $message = "Target number $target found at index $i";
        } else {
            $message = "Target number $target not found in the array";
        }

        // Return the view with the search result and steps
        return view('linear-search', compact('message', 'steps'));
    }
}
