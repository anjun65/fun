<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\ClientContact;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        
        $is_penetration = $request->has('is_penetration');
        $is_consulting = $request->has('is_consulting');
        $is_training = $request->has('is_training');

        $client = Client::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company' => $request->company,
            'email' => $request->email,
            'handphone' => $request->handphone,
            'message' => $request->message,
            'is_penetration' => $is_penetration,
            'is_consulting' => $is_consulting,
            'is_training' => $is_training,
            'status' => 'Queue',
        ]);

        $user = User::first();
        
        $user->notify(new ClientContact());

        return redirect('/contact')->with(['success' => 'Message has been send successfully. We will answer a message as soon as possible.']);
    }
}
