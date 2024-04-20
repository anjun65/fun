<?php

namespace App\Http\Controllers;

use App\Models\Journey;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    public function index()
    {
        $journeys = Journey::all()->sortBy('year')->groupBy('year');

        return view('pages.brand.journey', [
            'journeys' => $journeys,
        ]);
    }
}
