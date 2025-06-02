@extends('layouts.app')
@section('content')
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 text-[#003087]">Événements</h2>
        <ul class="list-disc pl-6">
            @foreach($events as $event)
                <li class="mb-4">
                    <span class="text-[#003087] font-semibold">{{ $event->title }}</span> - 
                    <span class="text-[#006633]">{{ $event->date->format('d/m/Y') }}</span>
                    <p class="text-gray-600 mt-1">{{ $event->description }}</p>
                </li>
            @endforeach
        </ul>
        <p class="mt-4 text-gray-700">Inscris-toi pour participer à nos événements !</p>
        @guest
            <a href="{{ route('register') }}" class="bg-[#006633] text-white px-6 py-2 rounded-lg hover:bg-green-800 transition-colors">S’inscrire</a>
        @endguest
    </div>
@endsection