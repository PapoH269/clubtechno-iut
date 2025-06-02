<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Technologie Innovation & IA - IUT</title>
    <link href="{{ Vite::asset('resources/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white font-sans">
    <!-- Header -->
    <header class="bg-[#003087] text-white p-4 flex items-center justify-between shadow-md">
        <div class="flex items-center">
            <div class="bg-white rounded-full shadow-lg p-1 transition-transform duration-300 hover:scale-110 hover:shadow-2xl">
                <img src="{{ asset('images/CTI&IA.png') }}" alt="Logo CTI&IA"
                     class="h-16 w-16 object-contain rounded-full"/>
            </div>
            <h1 class="ml-4 text-2xl font-extrabold tracking-wide text-yellow-300 drop-shadow-lg animate-pulse">
                Club Technologie Innovation & IA
            </h1>
        </div>
<nav>
    <ul class="flex space-x-4">
        @guest
            <li><a href="{{ route('welcome') }}" class="hover:text-[#006633] transition-colors">Accueil</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-[#006633] transition-colors">À propos</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-[#006633] transition-colors">Contact</a></li>
            <li><a href="#" class="hover:text-[#006633] transition-colors">Règles</a></li>
            <li><a href="{{ route('login') }}" class="hover:text-[#006633] transition-colors">Connexion</a></li>
            <li><a href="{{ route('register') }}" class="hover:text-[#006633] transition-colors">Inscription</a></li>
        @else
            <li><a href="{{ route('projects.index') }}" class="hover:text-[#006633] transition-colors">Projets</a></li>
            <li><a href="{{ route('events.index') }}" class="hover:text-[#006633] transition-colors">Événements</a></li>
            <li><a href="{{ route('profile.edit') }}" class="hover:text-[#006633] transition-colors">Mon profil</a></li>
            <li><a href="#" class="hover:text-[#006633] transition-colors">Membres du club (chat à venir)</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:text-[#006633] transition-colors">Déconnexion</button>
                </form>
            </li>
        @endguest
    </ul>
</nav>
    </header>

    <!-- Main content -->
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#003087] text-white p-4 text-center">
        <p>Club Technologie Innovation & IA - IUT des Comores © 2025</p>
    </footer>
</body>
</html>