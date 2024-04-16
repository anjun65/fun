<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();

        return view('pages.portofolio', [
            'portofolios' => $portofolios,
        ]);
    }
}
