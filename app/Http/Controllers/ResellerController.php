<?php

namespace App\Http\Controllers;

use App\Models\Juara;
use App\Models\JuaraGallery;
use Illuminate\Http\Request;

class ResellerController extends Controller
{
    public function index()
    {
        $juaras = Juara::all()->sortBy('years')
            ->sortBy('provinsi')
            ->sortBy('kota')
            ->sortBy('juara')
            ->groupBy('years')
            ->groupBy('provinsi')
            ->groupBy('kota');
        $juaraImage = JuaraGallery::latest()->get();

        return view('pages.brand.reseller', [
            'juara' => $juaras,
            'juaraImage' => $juaraImage,
        ]);
    }
}
