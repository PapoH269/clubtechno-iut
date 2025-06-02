@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 text-[#003087]">Nos projets</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <h3 class="text-xl font-semibold text-[#003087] mb-2">
                        <a href="{{ route('projects.show', $project) }}">{{ $project->title ?? 'Sans titre' }}</a>
                    </h3>
                    <p class="text-gray-600">{{ $project->description }}</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="{{ route('projects.edit', $project) }}" class="text-blue-500 hover:underline">Modifier</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-6 text-center">
            <a href="{{ route('projects.create') }}" class="inline-block bg-[#003087] text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-[#002663] transition-colors">
                Créer un projet
            </a>
        </div>
    </div>
@endsection