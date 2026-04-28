<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SolarConnect - Connexion &amp; Inscription</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec5b13",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Public Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Public Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
        }
        /* Animation douce pour les onglets */
        .tab-content {
            transition: opacity 0.2s ease-in-out;
        }
        .tab-btn.active {
            color: #ec5b13;
            border-bottom-color: #ec5b13;
        }
        .tab-btn:not(.active):hover {
            color: #ec5b13;
            border-bottom-color: rgba(236, 91, 19, 0.3);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 h-screen overflow-hidden flex flex-col">
    <!-- Top Navigation Bar (Fixed) -->
    <header class="w-full px-6 lg:px-12 py-4 flex items-center justify-between border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md sticky top-0 z-50 flex-none">
        <div class="flex items-center gap-3">
            <div class="bg-primary p-1.5 rounded-lg text-white">
                <span class="material-symbols-outlined text-2xl block">solar_power</span>
            </div>
            <h2 class="text-xl font-bold tracking-tight text-slate-900 dark:text-slate-100">SolarConnect</h2>
        </div>
        <nav class="flex items-center gap-4">
            <a href="{{ route('users.register') }}" class="tab-trigger-btn text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-primary transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary rounded-md px-2 py-1" data-tab="register">Inscription</a>
            <a href="{{ route('home') }}" class="bg-primary text-white px-5 py-2 rounded-xl text-sm font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 hover:scale-[1.02] active:scale-100 transition-all focus-visible:ring-4 focus-visible:ring-primary/30 outline-none">En savoir plus</a>
        </nav>
    </header>

    <main class="flex-1 flex flex-col lg:flex-row overflow-hidden">
        <!-- Left Side: Visual Content (Static & Fixed) -->
        <section class=" lg:flex lg:w-1/2 relative flex-col justify-center px-16 bg-slate-900 overflow-hidden left-content" style="border-radius: 0 3px 0px 0;">
            <div class="absolute inset-0 opacity-40 image-container">
                <img alt="Panneaux solaires modernes" class="w-full h-full  object-cover hero-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSQcQkYzAPDvCj4LUjNensmFQ9F161T6Vqaer1f7Ph3gsD7UP9SPs0KsLp4DLACUQkYK7_ZQd9PPKc9TlGQxciq3ZbrN2aKecYgp7Pp0_u_8AxibcY4Dppm8fSoqYtNFYZYX0-B5XLixF7Wu2pdcUIM6fHSwlpICxcqEu5dTl4Qofb6rpAwT_vrhf4PGh-NibxMQT5P0J1eLqW58t6b8IcaBRdxM9SZ9-OyzoOPZCTleiGQ9KkdZ_m6riY66p2i1IlEZmrs0_00Nw" />
            </div>
            <div class="absolute  inset-0 bg-gradient-to-tr from-background-dark via-background-dark/60 to-transparent" style="border-radius: 0 60px 0px 0;"></div>
            <div class="relative z-10 max-w-lg">
                <h1 class="text-white text-5xl font-black leading-tight tracking-tight mb-6">Votre solution pour connecter clients et experts solaires</h1>
                <p class="text-slate-300 text-lg leading-relaxed mb-10">Rejoignez SolarConnect et connectez-vous avec des professionnels et clients qualifiés pour vos projets solaires.</p>
            </div>
        </section>

        <!-- Right Side: Independent Scrollable Container with Tabs (Login / Register) -->
        <section class="w-full lg:w-1/2 flex flex-col overflow-y-auto custom-scrollbar bg-white dark:bg-background-dark">
            <div class="flex-1 flex flex-col items-center justify-center p-6 sm:p-12 lg:p-20">
                <div class="w-full max-w-[440px]">
            
                    
                    <!-- Formulaire de Connexion -->
                    <div id="loginFormContainer" class="tab-content">
                        <header class="mb-8 text-center lg:text-left">
                            <h2 class="text-2xl font-black text-slate-900 dark:text-slate-100 mb-2">Bienvenue sur SolarConnect</h2>
                            <p class="text-slate-600 dark:text-slate-400">Connectez-vous à votre compte pour accéder à votre espace.</p>
                        </header>
                        <form action="{{ route('login') }}" class="space-y-6" method="POST">
                            @csrf
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="email_login">Adresse e-mail</label>
                                <div class="relative group">
                                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">mail</span>
                                    <input class="w-full h-14 pl-12 pr-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/40 text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none transition-all" id="email_login" name="email" placeholder="nom@entreprise.com" required type="email" />
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between items-center">
                                    <label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="password_login">Mot de passe</label>
                                    <a class="text-xs font-bold text-primary hover:underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 rounded" href="#">Mot de passe oublié ?</a>
                                </div>
                                <div class="relative group">
                                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">lock</span>
                                    <input class="w-full h-14 pl-12 pr-12 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/40 text-slate-900 dark:text-white placeholder:text-slate-400 focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none transition-all" id="password_login" name="password" placeholder="••••••••" required type="password" />
                                    <button type="button" class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-primary transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary rounded-md p-0.5">
                                        <span class="material-symbols-outlined block">visibility</span>
                                    </button>
                                </div>
                            </div>
                             @error('email')
                                      <p class="text-red-500">{{ $message }}</p>
                             @enderror
                            <div class="flex items-center gap-3 py-1">
                                <div class="flex items-center">
                                    <input class="w-5 h-5 rounded border-slate-300 dark:border-slate-700 text-primary focus:ring-primary focus:ring-offset-0 transition-all cursor-pointer" id="remember" type="checkbox" />
                                </div>
                                <label class="text-sm font-medium text-slate-600 dark:text-slate-400 cursor-pointer select-none" for="remember">Se souvenir de moi sur cet appareil</label>
                            </div>
                            <button class="group relative w-full h-14 bg-primary text-white font-bold rounded-xl shadow-lg shadow-primary/20 hover:bg-primary/90 hover:scale-[0.99] active:scale-[0.97] transition-all text-base focus-visible:ring-4 focus-visible:ring-primary/30 outline-none" type="submit">
                                <span class="flex items-center justify-center gap-2">Se connecter</span>
                            </button>
                        </form>
                    </div>

                    <footer class="mt-16 text-center lg:text-left">
                        <p class="text-xs text-slate-500 dark:text-slate-500 leading-relaxed">
                            En continuant, vous acceptez les
                            <a class="underline hover:text-primary transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-primary rounded px-0.5" href="#">Conditions d'utilisation</a>
                            et la
                            <a class="underline hover:text-primary transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-primary rounded px-0.5" href="#">Politique de confidentialité</a>
                            de SolarConnect.
                        </p>
                    </footer>
                </div>
            </div>
        </section>
    </main>
    <style>
        /* amélioration visuelle des onglets pour qu'ils collent au design premium */
        .tab-btn.active {
            color: #ec5b13 !important;
            border-bottom: 2px solid #ec5b13 !important;
            font-weight: 800;
        }
        .tab-btn {
            transition: all 0.2s ease;
        }
        .tab-content {
            transition: opacity 0.2s;
        }
        .hidden {
            display: none;
        }
        button.toggle-password:focus {
            outline: 2px solid #ec5b13;
            border-radius: 8px;
        }
    </style>
    <!-- Aucune modification du design original : respect des couleurs, des ombres, des arrondis, des icônes Material, layout split-screen. -->
</body>
</html>