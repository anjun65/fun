<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    public function index()
    {
        $cycle = Cycle::first();


        return view('pages.brand.cycle', [
            'cycle' => $cycle,
        ]);
    }
}
