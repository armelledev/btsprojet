<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestion de Présence</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-50 text-gray-900">
        
        <nav class="bg-white shadow-sm border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex items-center gap-2">
                        <x-application-logo class="w-10 h-10 fill-current text-indigo-600" />
                        <span class="font-bold text-xl tracking-tight uppercase">Presence<span class="text-indigo-600">Pro</span></span>
                    </div>
                    
                    @if (Route::has('login'))
                        <div class="space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Tableau de bord</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-600 hover:text-indigo-600 font-medium">Connexion</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-900 transition">S'inscrire</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>

        <main>
            <div class="relative py-16 bg-white overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="lg:w-1/2">
                            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-6xl italic">
                                Simplifiez le <span class="text-indigo-600 underline">Pointage</span> de votre personnel.
                            </h1>
                            <p class="mt-4 text-xl text-gray-500">
                                Une plateforme complète pour gérer les présences, les catégories d'employés et les justifications d'absences en un clic.
                            </p>
                            <div class="mt-8 flex gap-4">
                                <a href="{{ route('login') }}" class="flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:text-lg">
                                    Commencer maintenant
                                </a>
                            </div>
                        </div>
                        <div class="hidden lg:block lg:w-1/2 mt-12 lg:mt-0">
                            <div class="flex justify-center">
                                <svg class="w-64 h-64 text-indigo-100" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-12 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                        
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                            <div class="text-indigo-600 mb-4 italic font-bold text-sm">TABLE USERS</div>
                            <h3 class="text-lg font-bold">Gestion Personnel</h3>
                            <p class="text-gray-500 text-sm mt-2">Authentification sécurisée gérée par Laravel Breeze pour chaque employé.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                            <div class="text-green-600 mb-4 italic font-bold text-sm">TABLE PRESENCE</div>
                            <h3 class="text-lg font-bold">Pointage Quotidien</h3>
                            <p class="text-gray-500 text-sm mt-2">Enregistrez les arrivées, les départs et calculez automatiquement les retards.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                            <div class="text-red-600 mb-4 italic font-bold text-sm">TABLE REASONS</div>
                            <h3 class="text-lg font-bold">Justifications</h3>
                            <p class="text-gray-500 text-sm mt-2">Gérez les motifs d'absences et les demandes de congés avec validation.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                            <div class="text-purple-600 mb-4 italic font-bold text-sm">TABLE CATEGORIES</div>
                            <h3 class="text-lg font-bold">Roles & Services</h3>
                            <p class="text-gray-500 text-sm mt-2">Organisez votre structure par départements et catégories de postes.</p>
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-white border-t py-8">
            <div class="text-center text-gray-400 text-sm">
                &copy; {{ date('Y') }} PresencePro - laeticia armelle tout droits reserver
            </div>
        </footer>
    </body>
</html>
  
</html>
