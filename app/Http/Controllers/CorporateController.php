<?php

namespace App\Http\Controllers;

use App\Models\Responsibility;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function index()
    {
        $respons = Responsibility::latest()->get();

        return view('pages.gallery.corporate-responsibility', [
            'respons' => $respons,
        ]);
    }

    public function show($id)
    {
        $respon = Responsibility::findorFail($id);

        return view('pages.gallery.corporate-details', [
            'respon' => $respon,
        ]);
    }
}
