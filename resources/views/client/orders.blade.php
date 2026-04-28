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
                <span class="material-symbols-outlined bg-primary-container shadow-lg shadow-primary-container text-white"
                style="font-variation-settings: 'FILL' 1;">solar_power</span>
                <span class="text-2xl font-black text-orange-600 dark:text-orange-500">SolarConnect</span>
               
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="p-2 text-slate-500 hover:bg-slate-100 rounded-full transition-colors active:scale-95 duration-200">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                 <div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
             <div class="text-right hidden sm:block">
                     <p class="text-xs font-bold text-slate-900">{{Auth::user()->first_name." ".Auth::user()->last_name}}</p>
                     <p class="text-[10px] text-slate-500">{{ Auth::user()->email }}</p>
                 </div>
            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-surface-container">
                <img alt="User profile"
                    data-alt="Professional portrait of a male user with a friendly expression in a modern office setting"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsbHOTLtnsz9j0LbFKo0bJflBA5717Aa3Uog3W61BX1GliuvYjcDSDINoW9TSdJwqvGAcLXglGbAYqE76VFLgp-kACJio6WGCRPk2S01KAh19nEWX3RwzplZlygILm0GBq0Lbw40DPrqs_AKPyZo6BGfb-2NWerTg1RqFC1ji7G2oMHl_SygbUZgBVBavLPGVp4m8ltmzMiL5rbIUhW9DJpo2vD4GXaM0Xl41FbWURRaH64mgiDc28qbwA1N7LWtTxWTGZ9xIbTjE" />
            </div>
            </div>
        </nav>
    </header>
    <!-- SideNavBar (Shared Component for Desktop Layout) -->
    <aside
        class="hidden lg:flex flex-col h-screen w-64 fixed left-0 top-0 bg-slate-50 dark:bg-slate-950 p-4 gap-2 font-['Inter'] font-medium text-sm pt-20">
        <div class="mb-8 px-4">
            <h2 class="text-xl font-extrabold text-slate-900 dark:text-white">Commandes</h2>
            <p class="text-slate-500 text-xs">Energy Portal</p>
        </div>
        <nav class="flex flex-col gap-1">
           
            <a class="flex items-center gap-3 p-3 text-slate-600 hover:bg-orange-50 transition-all duration-300 rounded-lg" href="{{ route('client.services.index') }}">
                <span class="material-symbols-outlined" data-icon="search">search</span>
                Recherche de services
            </a>
            <a class="text-slate-500 hover:bg-slate-100 transition-colors px-3 py-1 rounded-lg"
                href="{{ route('client.carts.index') }}">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                Cart</a>
            <a class="flex items-center gap-3 p-3 bg-orange-50 text-orange-700 rounded-lg"
                href="{{ route('client.orders.index') }}">
                <span class="material-symbols-outlined">list_alt</span>
                Commandes
            </a>
            <a class="flex items-center gap-3 p-3 text-slate-600 hover:bg-orange-50 transition-all duration-300 rounded-lg"
                href="{{ route('client.profile.show') }}">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                Profil
            </a>
        </nav>
         <div class="px-8 mt-auto pt-8 border-t border-slate-200/10">

            <a class="flex items-center text-slate-500 dark:text-slate-400 px-2 py-3 hover:text-error transition-all font-headline font-bold text-lg"
                href="{{ route('logout') }}">
                <span class="material-symbols-outlined mr-4" data-icon="logout">logout</span>
                <span>Logout</span>
            </a>
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
                            @foreach ($orders as $order)
                                <tr class="hover:bg-surface-container-low transition-colors group">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center text-primary">
                                                <span class="material-symbols-outlined"
                                                    data-icon="solar_power">solar_power</span>
                                            </div>
                                            <div>
                                                <span
                                                    class="block font-bold text-on-surface text-sm">{{ $order->name }}</span>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-sm text-on-surface-variant">{{ $order->created_at }}</td>
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-2">
                                            <img class="w-6 h-6 rounded-full"
                                                data-alt="professional logo of a technical service company specializing in renewable energy"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDw6q6fT-h9jWF2fu5dZDBomTuImDhLDkt97EZ4voPCRdXrRmn00XyL8ouOkLPKJmxoH4dclMZuxWqznSOZjx-YyBOOWZumlINyYnUtZqhskJpiOQYq55j-CU6iV2hOH1k325ZkJuQokEbx5Tm6mdILa386kc6cOEIXgXYaJu3K2pjLXoRqBSemXG-hcbSgPKoFrd0Y6J9X0iBMTEkC-VSOFXWpQYIWcmEj3yaLE2cEMcMmwnnZTWDutMwfgrVLjoXiBwgYr89XfRs" />
                                            <span
                                                class="text-sm font-medium"></span>{{ $order->prestataire->user->first_name . ' ' . $order->prestataire->user->last_name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        @if ($order->status === 'confirmed')
                                            <span
                                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-green-100 text-green-700">
                                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                                Terminé
                                            </span>
                                        @elseif ($order->status === 'pending')
                                            <span
                                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-orange-100 text-orange-700">
                                                <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                                                En cours
                                            </span>
                                        @elseif ($order->status === 'rejected')
                                            <span
                                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-orange-100 text-orange-800">
                                                <span class="w-1.5 h-1.5 rounded-full bg-red-600"></span>
                                                rejected
                                            </span>
                                        @elseif($order->status === 'cart')
                                            <span
                                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-blue-100 text-blue-700">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                                cart
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-5 text-right font-bold text-on-surface">
                                        {{ $order->total_price }} MAD</td>
                                    <td class="px-6 py-5">
                                        <div class="flex gap-2">
                                            <button
                                                class="p-2 text-blue-500 hover:bg-blue-500/10 rounded-lg transition-colors">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button>
                                            <form action="{{ route('client.orders.destroy',$order) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            <button type="submit"
                                                class="p-2 text-red-500 hover:bg-red-500/10 rounded-lg transition-colors">
                                                <span class="material-symbols-outlined">
                                                    delete
                                                </span>
                                            </button>
                                            </form>
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
            <p class="text-sm text-on-surface-variant">Affichage de <span class="font-bold text-on-surface">{{ $orders->count() }}</span>
                sur <span class="font-bold text-on-surface">{{ $orders->total() }}</span> commandes</p>
            <div class="flex gap-2">
                @if ($orders->onFirstPage())
                    
                <button
                    class="px-4 py-2 bg-surface-container-highest rounded-lg text-sm font-bold opacity-50 cursor-not-allowed">Précédent</button>
                    @else
                    <a href="{{$orders->previousPageUrl() }}"
                        class="px-4 py-2 bg-surface-container-highest rounded-lg text-sm font-bold ">Précédent</a>

                @endif
                @if ($orders->hasMorePages())
                <a href="{{ $orders->nextPageUrl() }}"
                    class="px-4 py-2 bg-surface-container-highest hover:bg-surface-variant transition-colors rounded-lg text-sm font-bold">Suivant</a>
                
                @else

                <button
                    class="px-4 py-2 bg-surface-container-highest hover:bg-surface-variant opacity-50 transition-colors rounded-lg text-sm font-bold  cursor-not-allowed">Suivant</button>
                @endif
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
