{{-- filepath: resources/views/dashboard.blade.php --}}
@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 text-[#003087]">Tableau de bord</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(!Auth::user()->pseudo || !Auth::user()->niveau || !Auth::user()->departement)
            <form action="{{ route('dashboard.updateProfile') }}" method="POST" class="mb-4 space-y-2">
                @csrf
                <label for="pseudo" class="block">Pseudo :</label>
                <input type="text" name="pseudo" id="pseudo" value="{{ Auth::user()->pseudo }}" class="border rounded px-2 py-1 w-full">

                <label for="niveau" class="block">Niveau :</label>
                <input type="text" name="niveau" id="niveau" value="{{ Auth::user()->niveau }}" class="border rounded px-2 py-1 w-full">

                <label for="departement" class="block">Département :</label>
                <input type="text" name="departement" id="departement" value="{{ Auth::user()->departement }}" class="border rounded px-2 py-1 w-full">

                <button type="submit" class="bg-[#006633] text-white px-3 py-1 rounded hover:bg-green-800 transition-colors mt-2">Mettre à jour</button>
            </form>
        @else
            <div class="mb-6">
                <p class="text-xl font-semibold mb-2">Bonjour {{ Auth::user()->name }} alias <span class="text-[#006633]">{{ Auth::user()->pseudo }}</span> ! 🎉</p>
                <p class="mb-1">Département : <span class="font-bold">{{ Auth::user()->departement }}</span></p>
                <p class="mb-4">Niveau : <span class="font-bold">{{ Auth::user()->niveau }}</span></p>
            </div>
        @endif
    </div>
@endsection