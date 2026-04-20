@extends('layouts.client')
    <!-- TopNavBar (Shared Component) -->
    @section('content')
    <nav
        class="fixed top-0 w-full z-50 glass-nav shadow-[0_12px_32px_rgba(18,28,40,0.06)] flex justify-between items-center px-6 py-3 w-full font-['Manrope'] antialiased tracking-tight">
        <div class="flex items-center gap-8">
            <span class="text-2xl font-black text-orange-600 dark:text-orange-500">SolarConnect</span>
            <div class="hidden md:flex gap-6">
                <a class="text-slate-500 hover:bg-slate-100 transition-colors px-3 py-1 rounded-lg"
                    href="#">Dashboard</a>
                <a class="text-orange-600 font-bold border-b-2 border-orange-600 px-3 py-1" href="#">Recherche de
                    services</a>
                <a class="text-slate-500 hover:bg-slate-100 transition-colors px-3 py-1 rounded-lg"
                    href="#">Commandes</a>
                
                <a class="text-slate-500 hover:bg-slate-100 transition-colors px-3 py-1 rounded-lg"
                    href="#">Profil</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button
                class="p-2 text-slate-500 hover:bg-slate-100 transition-colors rounded-full active:scale-95 duration-200">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-surface-container">
                <img alt="User profile"
                    data-alt="Professional portrait of a male user with a friendly expression in a modern office setting"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsbHOTLtnsz9j0LbFKo0bJflBA5717Aa3Uog3W61BX1GliuvYjcDSDINoW9TSdJwqvGAcLXglGbAYqE76VFLgp-kACJio6WGCRPk2S01KAh19nEWX3RwzplZlygILm0GBq0Lbw40DPrqs_AKPyZo6BGfb-2NWerTg1RqFC1ji7G2oMHl_SygbUZgBVBavLPGVp4m8ltmzMiL5rbIUhW9DJpo2vD4GXaM0Xl41FbWURRaH64mgiDc28qbwA1N7LWtTxWTGZ9xIbTjE" />
            </div>
        </div>
    </nav>
    <!-- SideNavBar (Shared Component - Desktop Hidden) -->
    <aside
        class="hidden md:flex h-screen w-64 fixed left-0 top-0 bg-slate-50 flex-col p-4 gap-2 font-['Inter'] font-medium text-sm z-40 pt-20">
        <div class="mb-8 px-2">
            <div class="text-xl font-extrabold text-slate-900">SolarConnect</div>
            <div class="text-xs text-slate-500">Energy Portal</div>
        </div>
        <nav class="flex flex-col gap-1">
            <a class="flex items-center gap-3 p-3 text-slate-600 hover:bg-orange-50 transition-all duration-300 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-3 p-3 bg-orange-50 text-orange-700 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="search">search</span>
                Recherche de services
            </a>
             <a class="text-slate-500 hover:bg-slate-100 transition-colors px-3 py-1 rounded-lg"
                    href="{{ route('carts.index') }}">Cart</a>
            <a class="flex items-center gap-3 p-3 text-slate-600 hover:bg-orange-50 transition-all duration-300 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                Commandes
            </a>
            <a class="flex items-center gap-3 p-3 text-slate-600 hover:bg-orange-50 transition-all duration-300 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                Profil
            </a>
        </nav>
        <div class="mt-auto p-4 bg-primary-container/10 rounded-xl">
            <p class="text-xs text-on-surface-variant mb-2">Passez au niveau supérieur</p>
            <button
                class="w-full bg-gradient-to-br from-primary to-primary-container text-white py-2 rounded-lg font-bold">Upgrade
                Plan</button>
        </div>
    </aside>
    <!-- Main Content -->
    <main class="pt-24 md:pl-64 min-h-screen">
        <div class="max-w-7xl mx-auto px-6 pb-20">
            <!-- Hero Search Section -->
            <header class="mb-12">
                <h1 class="text-4xl md:text-5xl font-extrabold text-on-surface tracking-tight mb-4">Trouvez votre <span
                        class="text-primary">expert solaire</span></h1>
                <p class="text-on-surface-variant max-w-2xl mb-8">Comparez les meilleurs services d'installation, de
                    maintenance et d'audit énergétique certifiés près de chez vous.</p>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"
                            data-icon="search">search</span>
                        <input
                            class="w-full pl-12 pr-4 py-4 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-primary/20 text-on-surface placeholder:text-slate-400"
                            placeholder="Rechercher un service (ex: Installation photovoltaïque)..." type="text" />
                    </div>
                    <button
                        class="px-8 py-4 bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold rounded-xl shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                        Lancer la recherche
                    </button>
                </div>
            </header>
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Filters -->
                <aside class="w-full lg:w-72 flex-shrink-0 space-y-8">
                    <!-- Price Range -->
                    <section class="bg-surface-container-low p-6 rounded-xl">
                        <h3 class="font-bold text-on-surface mb-4">Gamme de prix</h3>
                        <input class="w-full accent-primary mb-2" type="range" />
                        <div class="flex justify-between text-sm text-on-surface-variant">
                            <span>0 €</span>
                            <span>15 000 €+</span>
                        </div>
                    </section>
                    <!-- Service Type -->
                    <section class="bg-surface-container-low p-6 rounded-xl">
                        <h3 class="font-bold text-on-surface mb-4">Type de service</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded border-slate-300 text-primary focus:ring-primary"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-on-surface group-hover:text-primary transition-colors">Installation</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded border-slate-300 text-primary focus:ring-primary"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-on-surface group-hover:text-primary transition-colors">Maintenance
                                    &amp; Réparation</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded border-slate-300 text-primary focus:ring-primary"
                                    type="checkbox" />
                                <span class="text-sm text-on-surface group-hover:text-primary transition-colors">Audit
                                    énergétique</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded border-slate-300 text-primary focus:ring-primary"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-on-surface group-hover:text-primary transition-colors">Nettoyage
                                    panneaux</span>
                            </label>
                        </div>
                    </section>
                    <!-- Rating -->
                    <section class="bg-surface-container-low p-6 rounded-xl">
                        <h3 class="font-bold text-on-surface mb-4">Note minimale</h3>
                        <div class="space-y-2">
                            <button class="flex items-center gap-2 text-sm hover:text-primary transition-colors">
                                <div class="flex text-tertiary-container">
                                    <span class="material-symbols-outlined" data-icon="star"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined" data-icon="star"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined" data-icon="star"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined" data-icon="star"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined" data-icon="star">star</span>
                                </div>
                                <span class="text-on-surface-variant">4.0+</span>
                            </button>
                        </div>
                    </section>
                    <!-- Location -->
                    <section class="bg-surface-container-low p-6 rounded-xl">
                        <h3 class="font-bold text-on-surface mb-4">Localisation</h3>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm"
                                data-icon="location_on">location_on</span>
                            <input
                                class="w-full pl-9 pr-4 py-2 bg-surface-container-lowest border-none rounded-lg text-sm focus:ring-1 focus:ring-primary/20"
                                placeholder="Ville ou Code Postal" type="text" />
                        </div>
                    </section>
                </aside>
                <!-- Results Grid -->
                <div class="flex-grow">
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-on-surface-variant text-sm font-medium">124 services trouvés</span>
                        <div class="flex items-center gap-2 text-sm text-on-surface font-semibold">
                            Trié par :
                            <select
                                class="bg-transparent border-none focus:ring-0 text-primary cursor-pointer font-bold">
                                <option>Pertinence</option>
                                <option>Prix croissant</option>
                                <option>Mieux notés</option>
                            </select>
                        </div>
                    </div>
                    <!-- Bento Grid for Services -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                       
                       
                        <!-- Card 2: Maintenance -->
                        @foreach ($services as $service )
                            
                       
                        <div
                            class="group bg-surface-container-lowest rounded-xl overflow-hidden flex flex-col transition-all hover:shadow-xl">
                            <div class="h-48 overflow-hidden relative">
                                @if ($service->image_url)
                                    
                                <img alt="Service technician"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="A professional solar technician checking electrical components of an inverter with specialized tools in a clean garage"
                                src="{{ asset('storage/' . $service->image_url) }}" />
                                @else
                                <div
                                  class="w-[100%] h-[100%] rounded-lg bg-surface-container-high flex items-center justify-center shrink-0">
                                  <span class="material-symbols-outlined text-slate-400" data-icon="image">image</span>
                                </div>
                                @endif
                                <div
                                    class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full font-bold text-primary text-sm shadow-sm">
                                    {{$service->price}}MAD
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="font-extrabold text-lg text-on-surface mb-2">{{ $service->title }}
                                </h4>
                                <p class="text-sm text-on-surface-variant mb-4 line-clamp-2">{{$service->description}}</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-tertiary-container text-sm"
                                            data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="font-bold text-sm">4.8</span>
                                    </div>
                                    <a href="{{ route('services.show',$service->id) }}" class="text-primary font-bold text-sm hover:underline">Voir dispo</a>
                                </div>
                            </div>
                        </div>
                         @endforeach
                        <!-- Card 3: Repair -->
                        {{-- <div
                            class="group bg-surface-container-lowest rounded-xl overflow-hidden flex flex-col transition-all hover:shadow-xl">
                            <div class="h-48 overflow-hidden relative">
                                <img alt="Cleaning solar panels"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Close-up of a specialized brush cleaning the glass surface of a solar panel reflecting the blue sky"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfzNRkQiwcV8RC5GG4iPR02rPT1agq56QJgWeY9BSEAsVnmZCwrTPveMThWF8oYxHr3hdkJop4e9woGVLtkazYg9QAlWOGdM-W7iAGiqig8GZn6CcgN4Xwl3L8TqzpmJ9JL5TFcihg7cBgawQWI_eIe7I8G989LDpM9gJqoPlTQpvgobg_drYlXH2ot2c-A5abBCHSXdnMEQd9-GAmxHhmzmlEUWjtlks1oMS83jCyEqC87gZgbVHkL-EYNztpjXYvxhNpdUCkBuU" />
                                <div
                                    class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full font-bold text-primary text-sm shadow-sm">
                                    150 €
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="font-extrabold text-lg text-on-surface mb-2">Nettoyage Hydro-Ionisé</h4>
                                <p class="text-sm text-on-surface-variant mb-4 line-clamp-2">Gagnez jusqu'à 15% de
                                    rendement grâce à un nettoyage sans produits chimiques de vos panneaux.</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-tertiary-container text-sm"
                                            data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="font-bold text-sm">4.7</span>
                                    </div>
                                    <button class="text-primary font-bold text-sm hover:underline">Voir dispo</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center items-center gap-2">
                        <button
                            class="w-10 h-10 rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low transition-colors">
                            <span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
                        </button>
                        <button class="w-10 h-10 rounded-lg bg-primary text-white font-bold">1</button>
                        <button
                            class="w-10 h-10 rounded-lg border border-outline-variant hover:bg-surface-container-low transition-colors font-medium">2</button>
                        <button
                            class="w-10 h-10 rounded-lg border border-outline-variant hover:bg-surface-container-low transition-colors font-medium">3</button>
                        <span class="px-2 text-on-surface-variant">...</span>
                        <button
                            class="w-10 h-10 rounded-lg border border-outline-variant hover:bg-surface-container-low transition-colors font-medium">12</button>
                        <button
                            class="w-10 h-10 rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low transition-colors">
                            <span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- FAB Action (Contextual) -->
    <button
        class="fixed bottom-8 right-8 w-16 h-16 bg-gradient-to-br from-primary to-primary-container text-white rounded-full shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all z-50">
        <span class="material-symbols-outlined text-3xl" data-icon="support_agent">support_agent</span>
    </button>
@endsection
