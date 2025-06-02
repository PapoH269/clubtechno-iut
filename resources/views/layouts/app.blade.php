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
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 mr-4">
            <h1 class="text-xl font-bold">Club Technologie Innovation & IA</h1>
        </div>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('welcome') }}" class="hover:text-[#006633] transition-colors">Accueil</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-[#006633] transition-colors">À propos</a></li>
                <li><a href="{{ route('projects') }}" class="hover:text-[#006633] transition-colors">Projets</a></li>
                <li><a href="{{ route('events') }}" class="hover:text-[#006633] transition-colors">Événements</a></li>
                @auth
                    <li><a href="{{ route('dashboard') }}" class="hover:text-[#006633] transition-colors">Tableau de bord</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="hover:text-[#006633] transition-colors">Déconnexion</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="hover:text-[#006633] transition-colors">Connexion</a></li>
                    <li><a href="{{ route('register') }}" class="hover:text-[#006633] transition-colors">Inscription</a></li>
                @endauth
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