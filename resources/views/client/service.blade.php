<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#e0c0b1",
                        "surface-bright": "#f8f9ff",
                        "on-primary-fixed": "#341100",
                        "primary-fixed": "#ffdbca",
                        "on-background": "#121c28",
                        "secondary": "#555f6f",
                        "on-tertiary-fixed": "#231b00",
                        "on-surface": "#121c28",
                        "on-error": "#ffffff",
                        "surface-container-low": "#eef4ff",
                        "surface-dim": "#d1dbec",
                        "tertiary-fixed-dim": "#eec200",
                        "inverse-on-surface": "#eaf1ff",
                        "surface": "#f8f9ff",
                        "on-primary-container": "#582200",
                        "primary-container": "#f97316",
                        "error": "#ba1a1a",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#584237",
                        "primary": "#9d4300",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed": "#ffe083",
                        "background": "#f8f9ff",
                        "outline": "#8c7164",
                        "tertiary-container": "#cea700",
                        "primary-fixed-dim": "#ffb690",
                        "secondary-fixed-dim": "#bdc7d9",
                        "secondary-container": "#d6e0f3",
                        "on-primary-fixed-variant": "#783200",
                        "tertiary": "#735c00",
                        "surface-tint": "#9d4300",
                        "inverse-surface": "#27313e",
                        "surface-container": "#e5eeff",
                        "surface-container-high": "#dfe9fa",
                        "secondary-fixed": "#d9e3f6",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#574500",
                        "on-secondary-fixed-variant": "#3d4756",
                        "on-tertiary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-fixed": "#121c2a",
                        "on-tertiary-container": "#4e3e00",
                        "inverse-primary": "#ffb690",
                        "surface-variant": "#d9e3f4",
                        "error-container": "#ffdad6",
                        "surface-container-highest": "#d9e3f4",
                        "on-secondary-container": "#596373"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .tonal-shift {
            background-color: #f8f9ff;
        }

        .glass-nav {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased">
    <!-- TopAppBar -->
    <header class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm">
        <div class="flex justify-between items-center px-4 h-16 w-full max-w-7xl mx-auto">
            <div class="flex items-center gap-4">
                <a href="{{ route('services.index') }}"
                    class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors active:scale-95 transition-transform">
                    <span class="material-symbols-outlined text-slate-500">arrow_back</span>
                </a>
                <h1 class="text-lg font-bold text-slate-900 dark:text-slate-100 font-headline tracking-tight">Détails du
                    Service</h1>
            </div>
            <div class="flex items-center gap-2">
                <button
                    class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors active:scale-95 transition-transform">
                    <span class="material-symbols-outlined text-slate-500">more_vert</span>
                </button>
            </div>
        </div>
    </header>
    <main class="pt-16 pb-32">
        <div class="max-w-5xl mx-auto px-4 md:px-8">
            <!-- Hero Section & Service Image -->
            <div class="mt-6 relative rounded-2xl overflow-hidden aspect-[16/9] md:aspect-[21/9]">

                <img alt="Installation de panneaux solaires" class="w-full h-full object-cover"
                    data-alt="Modern rooftop solar panel installation under a clear blue sky with soft afternoon sunlight reflecting off glass panels"
                    src="{{ asset('storage/'. $service->image_url)  }}" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
            </div>
            <!-- Content Grid: Asymmetric Layout -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Main Content (Left) -->
                <div class="lg:col-span-8 space-y-8">
                    <!-- Header Info -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-xs font-semibold tracking-wide uppercase">
                                @if ($service->status == "active")
                                    
                                Disponible
                                @else
                                insponible
                                @endif
                            </span>
                            <span class="text-on-surface-variant text-sm font-medium flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">verified</span>
                                Certifié Helios
                            </span>
                        </div>
                        <h2
                            class="text-4xl md:text-5xl font-extrabold font-headline text-on-surface tracking-tight leading-tight">
                           {{$service->title}}
                        </h2>
                    </div>
                    <!-- Price Card -->
                   
                    <!-- Description -->
                    <div class="space-y-4 max-w-2xl">
                        <h3 class="text-xl font-bold font-headline text-on-surface">Description du service</h3>
                        <p class="text-on-surface-variant leading-relaxed text-lg">
                           {{$service->description}}
                        </p>

                        <div class="bg-surface-container-low p-6 rounded-xl flex items-end justify-between">
                        <div>
                            <p class="text-on-surface-variant text-sm font-medium mb-1">Durée estimée</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-4xl font-extrabold text-tertiary font-headline tracking-tight">
                                    {{$service->duration_formatted}}</span>
                               
                            </div>
                        </div>
                       
                      </div>
                       
                    </div>
                     <div class="bg-surface-container-low p-6 rounded-xl flex items-end justify-between">
                        <div>
                            <p class="text-on-surface-variant text-sm font-medium mb-1">Prix à partir de</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-4xl font-extrabold text-primary font-headline tracking-tight">4
                                    {{$service->price}}MAD</span>
                               
                            </div>
                        </div>
                        <div class="hidden md:block text-right">
                            <p class="text-xs text-on-surface-variant uppercase tracking-wider font-semibold">TVA
                                incluse</p>
                            <p class="text-sm font-medium text-tertiary">Éligible aux aides d'État</p>
                        </div>
                    </div>
                </div>
                <!-- Provider & Actions (Right / Sidebar) -->
                <div class="lg:col-span-4 space-y-6">
                    <!-- Provider Card -->
                    <div
                        class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.06)] border border-outline-variant/10">
                        <p class="text-xs text-on-surface-variant uppercase tracking-widest font-bold mb-4">Prestataire
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <img alt="Jean-Marc Dupont"
                                    class="w-14 h-14 rounded-full object-cover border-2 border-primary-fixed"
                                    data-alt="Professional male solar engineer smiling in a clean navy blue uniform with an engineering firm logo"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6wXuy9QNLyXdfq1kfx-eC7ZL-lxpc8K0LuxOFXlwk9S5ZbQfF2rJNprc6AkktOoRCFRTLME6LkSf_sK1a-IFvwYcSf7EawGiyqhRRr1iwMhgokpW1bCPBuX7FXFej-acbrfw7Fe6G3UqFNXRDREyb0TC-0UOewkdRVdhm6C5iS05RlDZG3AVSZfTsua5Xp0pTKEYqKeVVX3ZPYOVWoFlXzNtH2E5J7WfgORjiRWMEtMB75M3x4x8V47LxF3s1yhpNq7bwLhcU2nc" />
                                <div
                                    class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">{{$service->prestataire->user->first_name}}</h4>
                                <div class="flex items-center text-xs text-on-surface-variant font-medium">
                                    <span class="material-symbols-outlined text-amber-400 text-sm mr-1"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    4.9 (124 avis)
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-outline-variant/10 flex flex-col gap-3">
                            <button
                                class="w-full py-3 px-4 bg-surface-container-high text-on-surface-variant rounded-xl font-bold text-sm hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">chat</span>
                                Contacter l'expert
                            </button>
                        </div>
                    </div>
                    <!-- Quick Actions -->
                    <div class="flex flex-col gap-4">
                        <a href=""
                            class="w-full py-4 px-6 bg-gradient-to-br from-primary to-primary-container text-on-primary rounded-xl font-bold text-lg shadow-lg shadow-primary/20 active:scale-95 transition-all flex items-center justify-center gap-3">
                            Réserver ce service
                            <span class="material-symbols-outlined">bolt</span>
                        </a>
                        <a href=" {{ route('services.index') }}"
                            class="w-full py-4 px-6 bg-white text-on-surface border border-outline-variant/30 rounded-xl font-bold text-sm hover:bg-surface-container-low transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-sm">west</span>
                            Retour aux services
                        </a>
                    </div>
                    <!-- Key Benefits -->
                    <div class="p-6 bg-tertiary-container/5 rounded-xl border-l-4 border-tertiary-container">
                        <p class="text-sm font-bold text-on-tertiary-container mb-2">Pourquoi choisir ce service ?</p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-primary text-base">check_circle</span>
                                Étude technique gratuite incluse
                            </li>
                            <li class="flex items-start gap-2 text-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-primary text-base">check_circle</span>
                                Matériel certifié haut rendement
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- BottomNavBar -->
    <nav
        class="fixed bottom-0 w-full z-50 bg-white/90 dark:bg-slate-900/90 backdrop-blur-xl rounded-t-2xl md:hidden shadow-[0_-4px_20px_rgba(0,0,0,0.05)]">
        <div class="flex justify-around items-center px-6 pb-6 pt-2 w-full">
            <div
                class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 hover:text-orange-500 transition-all active:scale-90 duration-200">
                <span class="material-symbols-outlined">home</span>
                <span class="font-inter text-[11px] font-medium">Accueil</span>
            </div>
            <div
                class="flex flex-col items-center justify-center bg-orange-50 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-xl px-4 py-1 active:scale-90 duration-200">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">reorder</span>
                <span class="font-inter text-[11px] font-medium">Services</span>
            </div>
            <div
                class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 hover:text-orange-500 transition-all active:scale-90 duration-200">
                <span class="material-symbols-outlined">chat_bubble</span>
                <span class="font-inter text-[11px] font-medium">Messages</span>
            </div>
            <div
                class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 hover:text-orange-500 transition-all active:scale-90 duration-200">
                <span class="material-symbols-outlined">person</span>
                <span class="font-inter text-[11px] font-medium">Compte</span>
            </div>
        </div>
    </nav>
</body>

</html>
