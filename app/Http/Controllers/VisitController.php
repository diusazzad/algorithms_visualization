<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{

    // public function getData()
    // {
    //     // Check if data exists in cache
    //     if (Cache::has('data')) {
    //         // Retrieve data from cache
    //         $data = Cache::get('data');
    //     } else {
    //         // Perform expensive operation to fetch data
    //         $data = ... // Fetch data from database or external API

    //         // Store data in cache for future use
    //         Cache::put('data', $data, $minutes);
    //     }

    //     return view('welcome', compact('data'));
    // }
    public function trackVisit(Request $request)
    {
        $visit = new Visit();
        $visit->ip_address = $request->ip();
        $visit->device_info = $request->server('HTTP_USER_AGENT');

        // Capture additional information like network IP and location if needed
        // ...
        $visit->save();

        // Increment the visit count
        $visitCount = Visit::count();

        return view('welcome', compact('visitCount'));
    }
}
