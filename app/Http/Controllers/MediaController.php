<?php

namespace App\Http\Controllers;

use App\Models\MediaCoverage;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $medias = MediaCoverage::latest()->get();


        return view('pages.brand.media', [
            'medias' => $medias,
        ]);
    }

    public function show($id)
    {
        $media = MediaCoverage::findorFail($id);

        $lains = MediaCoverage::whereNotIn('id', [$id])->inRandomOrder()->limit(4)->get();

        return view('pages.brand.media-detail', [
            'media' => $media,
            'lains' => $lains,
        ]);
    }
}
