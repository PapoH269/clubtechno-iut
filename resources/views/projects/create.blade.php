{{-- filepath: resources/views/projects/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Créer un projet</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <!-- champs -->
        <button type="submit">Créer</button>
    </form>
@endsection