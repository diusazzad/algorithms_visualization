<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistrationRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('test.auth.registration');
    }

    public function register(Request $request){

        return response()->json(['message' => 'Registration successful. Please login.']);
    }
}
