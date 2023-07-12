<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // if ($user->role === 'superadmin') {
            //     return 'Login successful as Super Admin';
            // } elseif ($user->role === 'admin') {
            //     return 'Login successful as Admin';
            // } elseif ($user->role === 'editor') {
            //     return 'Login successful as Editor';
            // } elseif ($user->role === 'user') {
            //     return 'Login successful as User';
            //     return redirect()->route('auth.user.dashboard');
            // }

            if ($user->role === 'superadmin') {
                return redirect()->route('auth.superadmin.dashboard');
            } elseif ($user->role === 'admin') {
                return redirect()->route('auth.admin.dashboard');
            } elseif ($user->role === 'editor') {
                return redirect()->route('auth.editor.dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->route('auth.user.dashboard');
            }


        }
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

}
