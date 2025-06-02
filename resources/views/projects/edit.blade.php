{{-- filepath: resources/views/projects/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Modifier le projet</h1>
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Titre :</label>
        <input type="text" name="title" value="{{ $project->title }}" required>
        <br>
        <label>Description :</label>
        <textarea name="description">{{ $project->description }}</textarea>
        <br>
        <button type="submit">Mettre à jour</button>
    </form>
    <a href="{{ route('projects.index') }}">Retour à la liste</a>
@endsection