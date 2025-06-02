{{-- filepath: resources/views/projects/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Modifier le projet</h1>
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- champs -->
        <button type="submit">Mettre à jour</button>
    </form>
    <a href="{{ route('projects.index') }}">Retour à la liste</a>
@endsection