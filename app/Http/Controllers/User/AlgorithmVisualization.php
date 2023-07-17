<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlgorithmVisualization extends Controller
{
    public function index(){
        return view('auth.user.algorithm.dashboard');
    }

    public function search(Request $request)
    {
        $input = $request->input('user-input');
        $data = [4, 7, 2, 1, 9, 5];
        $resultIndex = $this->linearSearch($data, $input);

        if ($resultIndex !== -1) {
            $message = "Target $input found at index $resultIndex";
        } else {
            $message = "Target $input not found";
        }
        return view('linear-search', ['message' => $message]);
    }

    private function linearSearch($arr, $target)
    {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] === $target) {
                return $i; // Return index if target found
            }
        }
        return -1; // Return -1 if target not found
    }
}
