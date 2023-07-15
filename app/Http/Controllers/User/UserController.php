<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function logout()
    {
        Auth::logout(); // Logout the currently authenticated user
        return redirect()->route('auth.login'); // Redirect the user to the login page
    }
}
