<?php

namespace App\Http\Controllers;

use App\Models\api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $apis = Api::all();

        return response()->json($apis);
    }
}
