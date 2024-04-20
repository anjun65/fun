<?php

namespace App\Http\Controllers;

use App\Models\FounderProfile;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    public function index()
    {
        $founder = FounderProfile::first();


        return view('pages.brand.founder', [
            'founder' => $founder,
        ]);
    }
}
