<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlgorithmVisualization extends Controller
{
    public function index(){
        return view('auth.user.algorithm.dashboard');
    }

    public function LinearSearch(){
        
    }
}
