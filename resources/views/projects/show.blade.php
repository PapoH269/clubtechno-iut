{{-- filepath: resources/views/projects/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>{{ $project->title ?? 'Sans titre' }}</h1>
    <p>{{ $project->description }}</p>
    <a href="{{ route('projects.edit', $project) }}">Modifier</a>
    <form action="{{ route('projects.destroy', $project) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
    <a href="{{ route('projects.index') }}">Retour à la liste</a>
@endsection