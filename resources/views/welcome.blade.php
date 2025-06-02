@extends('layouts.app')
@section('content')
    <div class="text-center py-12 bg-gradient-to-b from-white to-gray-100">
        <h2 class="text-4xl font-bold mb-6 text-[#003087]">Bienvenue au Club Technologie Innovation & IA !</h2>
        <p class="text-lg mb-8 text-gray-700">Innover aujourd’hui, impacter demain ! Rejoins-nous à l’IUT des Comores.</p>
        @guest
            <a href="{{ route('register') }}" class="bg-[#006633] text-white px-8 py-3 rounded-lg hover:bg-green-800 transition-colors">S’inscrire maintenant</a>
        @endguest
        <a href="{{ route('projects') }}" class="mt-4 inline-block text-[#003087] hover:underline">Projets publics</a>
    </div>
@endsection