<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoadMap;

class RoadMapController extends Controller
{
    public function index()
    {
        $roadmaps = Roadmap::all()->sortBy('years')->groupBy('years');

        return view('pages.brand.road-map', [
            'roadmaps' => $roadmaps,
        ]);
    }
}
