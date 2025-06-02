@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 text-[#003087]">Tableau de bord</h2>
        <p class="text-gray-700 mb-2">Bienvenue, <span class="font-semibold">{{ Auth::user()->name }}</span> !</p>
        <p class="text-gray-700 mb-2">Niveau : <span class="font-semibold">{{ Auth::user()->niveau }}</span></p>
        <p class="text-gray-700 mb-4">Département : <span class="font-semibold">{{ Auth::user()->departement }}</span></p>
        <p class="text-gray-700 mb-4">Consulte nos projets et événements exclusifs :</p>
        <ul class="list-disc pl-5">
            <li><a href="{{ route('projects') }}" class="text-[#006633] hover:underline">Projets</a></li>
            <li><a href="{{ route('events') }}" class="text-[#006633] hover:underline">Événements</a></li>
        </ul>
    </div>
@endsection