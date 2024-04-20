<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function index()
    {
        $komisariss = Struktur::where('departement', '=', 'Komisaris')->get();
        $direkturs = Struktur::where('departement', '=', 'Direktur')->get();
        $gms = Struktur::where('departement', '=', 'GM')->get();
        $corporates = Struktur::where('departement', '=', 'Corporate Secretary')->get();
        $produksis = Struktur::where('departement', '=', 'Produksi')->get();
        $operasionals = Struktur::where('departement', '=', 'Operasional')->get();
        $sdms = Struktur::where('departement', '=', 'SDM/HRD')->get();
        $rds = Struktur::where('departement', '=', 'R&D')->get();
        $marketings = Struktur::where('departement', '=', 'Marketing')->get();
        $keuangans = Struktur::where('departement', '=', 'Keuangan')->get();


        return view('pages.brand.organisasi', [
            'komisariss' => $komisariss,
            'direkturs' => $direkturs,
            'gms' => $gms,
            'corporates' => $corporates,
            'produksis' => $produksis,
            'operasionals' => $operasionals,
            'sdms' => $sdms,
            'rds' => $rds,
            'marketings' => $marketings,
            'keuangans' => $keuangans,
        ]);
    }
}
