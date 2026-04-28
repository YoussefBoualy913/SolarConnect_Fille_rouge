@extends('layouts.client')
<!-- TopNavBar (Shared Component) -->
@section('content')
    <nav
        class="fixed top-0 w-full z-50 glass-nav shadow-[0_12px_32px_rgba(18,28,40,0.06)] flex justify-between items-center px-6 py-3 w-full font-['Manrope'] antialiased tracking-tight">

        <div class="flex items-center gap-8">
            <span class="material-symbols-outlined bg-primary-container shadow-lg shadow-primary-container text-white"
                style="font-variation-settings: 'FILL' 1;">solar_power</span>
            <span class="text-2xl font-black text-orange-600 dark:text-orange-500">SolarConnect</span>

        </div>
        <div class="flex items-center gap-4">
            <button
                class="p-2 text-slate-500 hover:bg-slate-100 transition-colors rounded-full active:scale-95 duration-200">
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
    <!-- SideNavBar (Shared Component - Desktop Hidden) -->
    <aside
        class="hidden md:flex h-screen w-64 fixed left-0 top-0 bg-slate-50 flex-col p-4 gap-2 font-['Inter'] font-medium text-sm z-40 pt-20">
        <div class="mb-8 px-2">
            <div class="text-xl font-extrabold text-slate-900">Services</div>
            <div class="text-xs text-slate-500">Energy Portal</div>
        </div>
        <nav class="flex flex-col gap-1">
           
            <a class="flex items-center gap-3 p-3 bg-orange-50 text-orange-700 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="search">search</span>
                Recherche de services
            </a>
            <a class="text-slate-500 hover:bg-slate-100 transition-colors px-3 py-1 rounded-lg"
                href="{{ route('client.carts.index') }}">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                Cart</a>
            <a class="flex items-center gap-3 p-3 text-slate-600 hover:bg-orange-50 transition-all duration-300 rounded-lg"
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
    <!-- Main Content -->
    <main class="pt-24 md:pl-64 min-h-screen">
        <div class="max-w-7xl mx-auto px-6 pb-20">
            <!-- Hero Search Section -->
            <header class="mb-12">
                <h1 class="text-4xl md:text-5xl font-extrabold text-on-surface tracking-tight mb-4">Trouvez votre <span
                        class="text-primary">expert solaire</span></h1>
                <p class="text-on-surface-variant max-w-2xl mb-8">Comparez les meilleurs services d'installation, de
                    maintenance et d'audit énergétique certifiés près de chez vous.</p>
                <div class="">
                    <form action="{{ route('client.services.index') }}" methode="GET" class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"
                            data-icon="search">search</span>
                        <input name="search"
                            class="w-full pl-12 pr-4 py-4 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-primary/20 text-on-surface placeholder:text-slate-400"
                            placeholder="Rechercher un service (ex: Installation photovoltaïque)..." type="text" />
                    </div>
                    <button type="submit"
                        class="px-8 py-4 bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold rounded-xl shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                        Lancer la recherche
                    </button>
                    </form>
                </div>
            </header>
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Filters -->
                <aside class="w-full lg:w-72 flex-shrink-0 space-y-8">
                    <!-- Price Range -->

                    <!-- Service Type -->
                    <section class="bg-surface-container-low p-6 rounded-xl">
                        <h3 class="font-bold text-on-surface mb-4">Type de service</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-on-surface group-hover:text-primary transition-colors">Installation</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                <span class="text-sm text-on-surface group-hover:text-primary transition-colors">Maintenance
                                    &amp; Réparation</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                <span class="text-sm text-on-surface group-hover:text-primary transition-colors">Audit
                                    énergétique</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                <span class="text-sm text-on-surface group-hover:text-primary transition-colors">Nettoyage
                                    panneaux</span>
                            </label>
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
                                placeholder="Ville" type="text" />
                        </div>
                    </section>
                </aside>
                <!-- Results Grid -->
                <div class="flex-grow">
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-on-surface-variant text-sm font-medium">{{ $services->total() }} services trouvés</span>
                        <div class="flex items-center gap-2 text-sm text-on-surface font-semibold">
                            Trié par :
                            <select class="bg-transparent border-none focus:ring-0 text-primary cursor-pointer font-bold">
                                <option>Pertinence</option>
                                <option>Prix croissant</option>
                                <option>Mieux notés</option>
                            </select>
                        </div>
                    </div>
                    <!-- Bento Grid for Services -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


                        <!-- Card 2: Maintenance -->



                        @forelse ($services as $service)
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
                                            <span class="material-symbols-outlined text-slate-400"
                                                data-icon="image">image</span>
                                        </div>
                                    @endif
                                    <div
                                        class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full font-bold text-primary text-sm shadow-sm">
                                        {{ $service->price }}MAD
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h4 class="font-extrabold text-lg text-on-surface mb-2">{{ $service->title }}
                                    </h4>
                                    <p class="text-sm text-on-surface-variant mb-4 line-clamp-2">
                                        {{ $service->description }}</p>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-tertiary-container text-sm"
                                                data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="font-bold text-sm">4.8</span>
                                        </div>
                                        <a href="{{ route('client.services.show', $service->id) }}"
                                            class="text-primary font-bold text-sm hover:underline">Voir dispo</a>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <div class="col-span-full flex flex-col items-center justify-center py-12">
                                <span class="material-symbols-outlined text-4xl text-gray-400 mb-2">info</span>
                                <p class="text-gray-500 text-lg font-semibold">
                                    Aucun service trouvé
                                </p>
                                <p class="text-sm text-gray-400">
                                    Essayez de modifier vos critères de recherche.
                                </p>
                            </div>
                        @endforelse



                    </div>
                    <!-- Pagination -->
                   
                        {{ $services->links() }}
                 
                </div>
            </div>
        </div>
    </main>
@endsection
