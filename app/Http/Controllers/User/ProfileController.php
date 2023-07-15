<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('auth.user.profile.profile');
    }
    public function settings(){
        return view('auth.user.profile.settings');
    }
}
