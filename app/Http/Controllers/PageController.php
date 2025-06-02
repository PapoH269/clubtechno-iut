<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Project;

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

    public function projects()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
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
    public function register()
    {
        // Ton code ici, par exemple :
        return view('register');
    }
}
