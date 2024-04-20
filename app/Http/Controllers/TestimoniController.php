<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();

        return view('pages.gallery.testimoni', [
            'testimonials' => $testimonials,
        ]);
    }
}
