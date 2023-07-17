<?php

// Function for linear search
function linearSearch($arr, $target)
{
    $n = count($arr);

    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $target) {
            return $i; // Return the index where the target value is found
        }
    }

    return -1; // Return -1 if the target value is not found
}

// User input
$size = intval(readline("Enter the size of the array: "));
$numbers = [];

for ($i = 0; $i < $size; $i++) {
    $number = intval(readline("Enter element " . ($i + 1) . ": "));
    $numbers[] = $number;
}

$targetValue = intval(readline("Enter the target value to search for: "));

// Perform linear search
$result = linearSearch($numbers, $targetValue);

// Output the result
if ($result != -1) {
    echo "The target value is found at index: " . $result . "\n";
} else {
    echo "The target value is not found in the array.\n";
}
