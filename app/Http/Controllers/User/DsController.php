<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DsController extends Controller
{
    public function index()
    {
        return view('auth.user.ds.dashboard');
    }

}
