{{-- filepath: resources/views/projects/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Créer un projet</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label>Titre :</label>
        <input type="text" name="title" required>
        <br>
        <label>Description :</label>
        <textarea name="description"></textarea>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection