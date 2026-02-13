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
    <title>PresencePro | Accueil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="antialiased bg-slate-50 overflow-x-hidden">

    <header class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-2 animate__animated animate__fadeInLeft">
                    <div class="bg-indigo-600 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="text-2xl font-black text-slate-800 tracking-tight">Presence<span class="text-indigo-600">Pro</span></span>
                </div>

                <nav class="flex items-center gap-6 animate__animated animate__fadeInRight">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="flex items-center gap-2 text-slate-600 hover:text-indigo-600 font-medium transition-all group">
                                <span>Tableau de Bord</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-slate-600 hover:text-indigo-600 font-semibold transition-colors">Connexion</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-slate-900 text-white px-5 py-2.5 rounded-full hover:bg-indigo-600 transition-all shadow-lg hover:shadow-indigo-200 active:scale-95 font-medium">S'inscrire</a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </div>
        </div>
    </header>

    <section class="relative min-h-screen flex items-center justify-center pt-20">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full -z-10 overflow-hidden">
            <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-indigo-100/50 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[30%] h-[30%] bg-blue-100/50 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-indigo-700 text-sm font-medium mb-8 animate__animated animate__fadeInDown">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                </span>
                Nouveau : Système de pointage intelligent
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-6 animate__animated animate__fadeInUp">
                La Gestion de Présence <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-blue-500 underline decoration-indigo-200 underline-offset-8">Simplifiée.</span>
            </h1>

            <p class="text-lg md:text-xl text-slate-500 mb-10 max-w-2xl mx-auto leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">
                Optimisez chaque instant de votre entreprise, du suivi du pointage des employés à la génération des bilans de présence. Un seul outil, une clarté totale.
            </p>

            <div class="animate__animated animate__fadeInUp animate__delay-2s">
                <a href="{{ route('login') }}" class="group relative inline-flex items-center justify-center px-10 py-4 font-bold text-white transition-all duration-200 bg-indigo-600 font-pj rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 hover:bg-indigo-700 shadow-xl shadow-indigo-200">
                    Accéder au Tableau de Bord
                </a>
                
                <p class="mt-6 text-sm text-slate-400 font-medium">
                    Déjà 50+ entreprises nous font confiance.
                </p>
            </div>
        </div>
    </section>

    <footer class="py-10 text-center border-t border-slate-200 bg-white">
        <p class="text-slate-400 text-sm">
            © 2026 PresencePro. Tous droits réservés. | Propulsé par Laravel & Tailwind CSS.
        </p>
    </footer>

</body>
</html>
  
</html>
