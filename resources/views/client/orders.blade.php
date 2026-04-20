<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SolarConnect - Historique des Commandes</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f8f9ff",
                        "inverse-surface": "#27313e",
                        "tertiary-fixed": "#ffe083",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "inverse-primary": "#ffb690",
                        "on-secondary-fixed": "#121c2a",
                        "surface-variant": "#d9e3f4",
                        "tertiary": "#735c00",
                        "surface-container": "#e5eeff",
                        "surface-bright": "#f8f9ff",
                        "on-tertiary-container": "#4e3e00",
                        "secondary-fixed-dim": "#bdc7d9",
                        "outline-variant": "#e0c0b1",
                        "secondary": "#555f6f",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#cea700",
                        "primary-fixed": "#ffdbca",
                        "primary": "#9d4300",
                        "inverse-on-surface": "#eaf1ff",
                        "background": "#f8f9ff",
                        "secondary-fixed": "#d9e3f6",
                        "surface-container-high": "#dfe9fa",
                        "on-secondary-fixed-variant": "#3d4756",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed": "#341100",
                        "on-tertiary": "#ffffff",
                        "surface-container-highest": "#d9e3f4",
                        "on-tertiary-fixed-variant": "#574500",
                        "on-tertiary-fixed": "#231b00",
                        "surface-container-low": "#eef4ff",
                        "on-error-container": "#93000a",
                        "on-primary-container": "#582200",
                        "on-surface": "#121c28",
                        "primary-container": "#f97316",
                        "surface-dim": "#d1dbec",
                        "surface-tint": "#9d4300",
                        "on-background": "#121c28",
                        "on-primary-fixed-variant": "#783200",
                        "primary-fixed-dim": "#ffb690",
                        "on-secondary-container": "#596373",
                        "outline": "#8c7164",
                        "tertiary-fixed-dim": "#eec200",
                        "error": "#ba1a1a",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#d6e0f3",
                        "on-surface-variant": "#584237"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
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
            vertical-align: middle;
        }

        .tonal-shift {
            background: linear-gradient(135deg, #f8f9ff 0%, #eef4ff 100%);
        }

        .premium-shadow {
            shadow-color: rgba(18, 28, 40, 0.06);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased">
    <!-- TopNavBar (Shared Component JSON Mapping) -->
    <header
        class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-[0_12px_32px_rgba(18,28,40,0.06)] font-['Manrope'] antialiased tracking-tight">
        <nav class="flex justify-between items-center px-6 py-3 w-full max-w-7xl mx-auto">
            <div class="flex items-center gap-8">
                <span class="text-2xl font-black text-orange-600 dark:text-orange-500">SolarConnect</span>
                <div class="hidden md:flex gap-6">
                    <a class="text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors px-3 py-2 rounded-lg"
                        href="#">Dashboard</a>
                    <a class="text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors px-3 py-2 rounded-lg"
                        href="#">Recherche de services</a>
                    <a class="text-orange-600 dark:text-orange-400 font-bold border-b-2 border-orange-600 px-3 py-2"
                        href="#">Commandes</a>
                    <a class="text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors px-3 py-2 rounded-lg"
                        href="#">Profil</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="p-2 text-slate-500 hover:bg-slate-100 rounded-full transition-colors active:scale-95 duration-200">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <div class="w-10 h-10 rounded-full overflow-hidden ring-2 ring-orange-50">
                    <img alt="User profile"
                        data-alt="professional headshot of a smiling man in a business casual attire with soft office lighting background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAR83m_1nqUpm3ob55ojOBEQ2eaSStDEzH_Rs4QJhCj2ZZMxN0q8p1lSAieta-zeFka1mGGt0RCgFlxmqXPz-_ontCiuvAyc779IkbsFDs9GvNlQ6u8RUVwJNFyEnde5GwutJ-5F5S9nShRgtazwhZ_9PNJpPBTCRiGYbe_fVJdfkjFBThdz6RpfPtNS-BvLeEufXn6LAAcqENZSAYSXfSPHgxIDZgKCOoD3udBmL6YMee67BJZCwcwoHULUX9aRA379PsPmPvtY3w" />
                </div>
            </div>
        </nav>
    </header>
    <!-- SideNavBar (Shared Component for Desktop Layout) -->
    <aside
        class="hidden lg:flex flex-col h-screen w-64 fixed left-0 top-0 bg-slate-50 dark:bg-slate-950 p-4 gap-2 font-['Inter'] font-medium text-sm pt-20">
        <div class="mb-8 px-4">
            <h2 class="text-xl font-extrabold text-slate-900 dark:text-white">Energy Portal</h2>
            <p class="text-slate-500 text-xs">SolarConnect</p>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-orange-50 transition-all rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-orange-50 transition-all rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="search">search</span>
                <span>Recherche de services</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 bg-orange-50 text-orange-700 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                <span>Commandes</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-orange-50 transition-all rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span>Profil</span>
            </a>
        </nav>
        <div class="mt-auto p-4 bg-primary/10 rounded-xl">
            <p class="text-primary font-bold mb-2">Upgrade Plan</p>
            <p class="text-xs text-on-surface-variant mb-3">Accédez à plus de services premium.</p>
            <button
                class="w-full bg-primary text-white py-2 rounded-lg text-xs font-bold hover:opacity-90 transition-opacity">Passer
                Pro</button>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="lg:ml-64 pt-24 pb-12 px-6 min-h-screen max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="mb-10">
            <h1 class="text-4xl font-headline font-black text-on-surface tracking-tight mb-2">Mes Commandes</h1>
            <p class="text-on-surface-variant max-w-2xl">Gérez l'historique de vos installations solaires, maintenances
                et services énergétiques. Suivez l'état d'avancement de vos projets en temps réel.</p>
        </div>
        <!-- Filters & Stats Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
            <div
                class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] border-none">
                <span class="text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2 block">Total
                    Dépensé</span>
                <div class="flex items-end justify-between">
                    <span class="text-3xl font-headline font-black text-primary">12 450 €</span>
                    <span
                        class="text-tertiary-container bg-tertiary-fixed text-[10px] font-bold px-2 py-1 rounded-full">+12%</span>
                </div>
            </div>
            <div
                class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] border-none">
                <span class="text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2 block">Commandes
                    Actives</span>
                <span class="text-3xl font-headline font-black text-on-surface">3</span>
            </div>
            <div
                class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] border-none">
                <span
                    class="text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2 block">Interventions</span>
                <span class="text-3xl font-headline font-black text-on-surface">8</span>
            </div>
            <div
                class="bg-primary-container p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.1)] flex flex-col justify-between text-white">
                <span class="material-symbols-outlined text-3xl" data-icon="bolt">bolt</span>
                <span class="font-bold text-sm">Économies réalisées : 420kg CO2</span>
            </div>
        </div>
        <!-- Orders Table/List Container -->
        <div class="bg-surface-container-low rounded-xl overflow-hidden p-1">
            <div class="bg-surface-container-lowest rounded-lg">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr
                                class="bg-surface-container-high/50 text-on-surface-variant text-xs font-bold uppercase tracking-widest">
                                <th class="px-6 py-4">Commande</th>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4">Prestataire</th>
                                <th class="px-6 py-4 text-center">Statut</th>
                                <th class="px-6 py-4 text-right">Montant</th>
                                <th class="px-6 py-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-variant/20">
                            <!-- Order Row 1 -->
                            @foreach ( $orders as $order )
                                
                            
                                
                            
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined"
                                                data-icon="solar_power">solar_power</span>
                                        </div>
                                        <div>
                                            <span class="block font-bold text-on-surface text-sm">{{$order->name}}</span>
                                           
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-sm text-on-surface-variant">{{$order->created_at}}</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-2">
                                        <img class="w-6 h-6 rounded-full"
                                            data-alt="professional logo of a technical service company specializing in renewable energy"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDw6q6fT-h9jWF2fu5dZDBomTuImDhLDkt97EZ4voPCRdXrRmn00XyL8ouOkLPKJmxoH4dclMZuxWqznSOZjx-YyBOOWZumlINyYnUtZqhskJpiOQYq55j-CU6iV2hOH1k325ZkJuQokEbx5Tm6mdILa386kc6cOEIXgXYaJu3K2pjLXoRqBSemXG-hcbSgPKoFrd0Y6J9X0iBMTEkC-VSOFXWpQYIWcmEj3yaLE2cEMcMmwnnZTWDutMwfgrVLjoXiBwgYr89XfRs" />
                                        <span class="text-sm font-medium"></span>{{ $order->prestataire->user->first_name." ".$order->prestataire->user->last_name}}
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-center">
                                    @if($order->status === "confirmed" )
                                        
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-green-100 text-green-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                        Terminé
                                    </span>
                                    @elseif ( $order->status ==="pending" )
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-orange-100 text-orange-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                                        En cours
                                    </span>
                                    @elseif ( $order->status ==="rejected" )
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-orange-100 text-orange-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-red-600"></span>
                                        rejected
                                    </span>
                                    @elseif($order->status ==="cart")
                                     <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-blue-100 text-blue-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                        cart
                                    </span>


                                    @endif
                                </td>
                                <td class="px-6 py-5 text-right font-bold text-on-surface">{{$order->total_price}} MAD</td>
                                <td class="px-6 py-5">
                                    <div class="flex gap-2">
                                        <button
                                            class="p-2 text-primary hover:bg-primary/10 rounded-lg transition-colors">
                                            <span class="material-symbols-outlined"
                                                data-icon="visibility">visibility</span>
                                        </button>
                                        <button
                                            class="p-2 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-colors">
                                            <span class="material-symbols-outlined"
                                                data-icon="chat_bubble">chat_bubble</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="mt-8 flex justify-between items-center px-4">
            <p class="text-sm text-on-surface-variant">Affichage de <span class="font-bold text-on-surface">3</span>
                sur <span class="font-bold text-on-surface">24</span> commandes</p>
            <div class="flex gap-2">
                <button
                    class="px-4 py-2 bg-surface-container-highest rounded-lg text-sm font-bold opacity-50 cursor-not-allowed">Précédent</button>
                <button
                    class="px-4 py-2 bg-surface-container-highest hover:bg-surface-variant transition-colors rounded-lg text-sm font-bold">Suivant</button>
            </div>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full bg-white border-t border-surface-variant/20 flex justify-around py-3 px-2 z-50 shadow-[0_-4px_16px_rgba(0,0,0,0.05)]">
        <a class="flex flex-col items-center gap-1 text-slate-500" href="#">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span class="text-[10px] font-medium">Dashboard</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-slate-500" href="#">
            <span class="material-symbols-outlined" data-icon="search">search</span>
            <span class="text-[10px] font-medium">Services</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-orange-600" href="#">
            <span class="material-symbols-outlined" data-icon="shopping_cart"
                style="font-variation-settings: 'FILL' 1;">shopping_cart</span>
            <span class="text-[10px] font-bold">Commandes</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-slate-500" href="#">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="text-[10px] font-medium">Profil</span>
        </a>
    </nav>
</body>

</html>
