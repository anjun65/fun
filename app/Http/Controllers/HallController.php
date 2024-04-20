<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        $blogs = Event::where('category', '=', 'Blog')->latest()->get();
        $events = Event::where('category', '=', 'Event')->latest()->get();
        $collaborations = Event::where('category', '=', 'Collaboration')->latest()->get();

        return view('pages.gallery.hall-of-fame', [
            'blogs' => $blogs,
            'events' => $events,
            'collaborations' => $collaborations,
        ]);
    }

    public function show($id)
    {
        $event = Event::findorFail($id);

        return view('pages.gallery.hall-details', [
            'event' => $event,
        ]);
    }
}
