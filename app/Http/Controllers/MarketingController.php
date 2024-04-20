<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function index()
    {
        $marketings = Marketing::latest()->get();

        return view('pages.gallery.marketing-activity', [
            'marketings' => $marketings
        ]);
    }

    public function show($id)
    {
        $marketing = Marketing::findorFail($id);

        return view('pages.gallery.marketing-details', [
            'marketing' => $marketing,
        ]);
    }
}
