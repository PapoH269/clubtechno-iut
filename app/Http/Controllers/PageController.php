<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function events()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'pseudo' => 'nullable|string|max:50',
            'niveau' => 'nullable|string|max:50',
            'departement' => 'nullable|string|max:100',
        ]);
        $user = auth()->user();
        $user->pseudo = $request->pseudo;
        $user->niveau = $request->niveau;
        $user->departement = $request->departement;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Profil mis à jour !');
    }
}
