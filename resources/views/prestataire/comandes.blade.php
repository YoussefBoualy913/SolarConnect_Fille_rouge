

@extends('layouts.prestataire')
@vite('resources/js/prestataireService.js')
@section('title', 'Gestion des Services | SolarGrid Pro')



@section('Services')
flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm
@endsection

@section('Dashboard')
flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm
@endsection

@section('Reviews')
flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm
@endsection

@section('Orders')
flex items-center gap-3 px-3 py-2 text-orange-700 dark:text-orange-300 bg-white dark:bg-slate-900 rounded-lg shadow-sm font-manrope font-medium text-sm
@endsection

@section('Profile')
flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm
@endsection

@section('content')        
           
           
           
           <header class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
                <div>
                    <h1 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface mb-2">Gestion des
                        Commandes</h1>
                    <p class="text-on-surface-variant max-w-md">Supervisez vos demandes d'installation et de maintenance
                        solaire en temps réel.</p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="bg-surface-container-high text-primary px-5 py-2.5 rounded-xl font-semibold text-sm transition-transform active:scale-95">
                        Exporter PDF
                    </button>
                   
                </div>
            </header>
            <!-- Filters & Stats Bento -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                <div
                    class="md:col-span-3 bg-surface-container-low rounded-2xl p-4 flex items-center gap-2 overflow-x-auto no-scrollbar">
                    <button
                        class="px-6 py-2 bg-white text-primary font-semibold rounded-lg shadow-sm text-sm whitespace-nowrap">Toutes</button>
                    <button
                        class="px-6 py-2 text-on-secondary-fixed-variant hover:bg-white/50 rounded-lg text-sm whitespace-nowrap transition-colors">Nouvelles
                        (12)</button>
                    <button
                        class="px-6 py-2 text-on-secondary-fixed-variant hover:bg-white/50 rounded-lg text-sm whitespace-nowrap transition-colors">En
                        cours (8)</button>
                    <button
                        class="px-6 py-2 text-on-secondary-fixed-variant hover:bg-white/50 rounded-lg text-sm whitespace-nowrap transition-colors">Terminées
                        (45)</button>
                    <div class="ml-auto flex items-center gap-4 px-4 border-l border-outline-variant/30">
                        <span
                            class="material-symbols-outlined text-on-surface-variant cursor-pointer">filter_list</span>
                        <span class="material-symbols-outlined text-on-surface-variant cursor-pointer">sort</span>
                    </div>
                </div>
                <div class="bg-primary/5 rounded-2xl p-4 flex flex-col justify-center border border-primary/10">
                    <p class="text-xs font-bold uppercase tracking-wider text-primary opacity-70">Revenu mensuel</p>
                    <p class="text-2xl font-black text-on-surface">{{ $RevenueMensuel }} HD</p>
                </div>
            </div>
            <!-- Orders Table / List -->
            <div class="space-y-4">
                <!-- Order Item 1 -->
                @foreach ($orders as  $order)
                 @if ($order->status === "pending")
                     
                 <div
                 class="group bg-surface-container-lowest rounded-2xl p-6 transition-all hover:shadow-xl hover:shadow-slate-200/50 flex flex-col lg:flex-row lg:items-center gap-6 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-tertiary-container"></div>
                <div class="flex-1 flex flex-col md:flex-row md:items-center gap-6">
                    <div
                    class="h-14 w-14 rounded-full bg-surface-container-high flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-primary text-3xl">solar_power</span>
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-1">
                        <h3 class="font-bold text-lg text-on-surface">{{$order->client->first_name." ".$order->client->last_name}}</h3>
                                <span
                                class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-black uppercase tracking-widest rounded-full">NOUVEAU</span>
                            </div>
                            <p class="text-sm text-on-surface-variant font-medium">{{$order->name}}</p>
                            <div class="flex items-center gap-4 mt-2 text-xs text-on-surface-variant/70">
                                <span class="flex items-center gap-1"><span
                                    class="material-symbols-outlined text-sm">calendar_month</span>{{ ucfirst($order->created_at->translatedFormat('d F Y')) }}</span>
                                    <span class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">location_on</span>{{$order->client->ville}}</span>
                                    </div>
                                </div>
                            </div>
                            <div
                            class="flex flex-col items-start lg:items-end gap-1 px-4 lg:border-x border-outline-variant/20">
                            <p class="text-xs text-on-surface-variant">Montant Total</p>
                            <p class="text-xl font-bold text-on-surface">{{ $order->total_price}} HD</p>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <form action="{{ route('prestataire.orders.accepter',$order) }}" method="POST">
                                @csrf
                            <button type="submit"
                            class="bg-primary/10 text-primary px-4 py-2 rounded-xl text-sm font-bold hover:bg-primary hover:text-white transition-all scale-95 active:scale-90">Accepter</button>
                            </form>
                              <form action="{{ route('prestataire.orders.refuser',$order) }}" method="POST">
                                @csrf
                            <button
                            class="bg-error/5 text-error px-4 py-2 rounded-xl text-sm font-semibold hover:bg-error/10 transition-all scale-95 active:scale-90">Refuser</button>
                            </form>
                            <button
                            class="p-2 bg-surface-container-high text-on-surface-variant rounded-xl hover:bg-primary-container/20 transition-all">
                            <span class="material-symbols-outlined">chat_bubble</span>
                        </button>
                    </div>
                </div>
                @endif
                @if ($order->status === "confirmed")
                     <div
                    class="group bg-surface-container-lowest rounded-2xl p-6 transition-all hover:shadow-xl hover:shadow-slate-200/50 flex flex-col lg:flex-row lg:items-center gap-6 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-primary"></div>
                    <div class="flex-1 flex flex-col md:flex-row md:items-center gap-6">
                        <div
                            class="h-14 w-14 rounded-full bg-surface-container-high flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-3xl">build</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-1">
                                <h3 class="font-bold text-lg text-on-surface">{{$order->client->first_name." ".$order->client->last_name}}</h3>
                                <span
                                    class="px-3 py-1 bg-secondary-container text-on-secondary-container text-[10px] font-black uppercase tracking-widest rounded-full">EN
                                    COURS</span>
                            </div>
                            <p class="text-sm text-on-surface-variant font-medium">Maintenance Annuelle &amp; Nettoyage
                            </p>
                            <div class="flex items-center gap-4 mt-2 text-xs text-on-surface-variant/70">
                                <span class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">calendar_month</span> {{ ucfirst($order->created_at->translatedFormat('d F Y')) }}</span>
                                <span class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">location_on</span>{{$order->client->ville}}</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start lg:items-end gap-1 px-4 lg:border-x border-outline-variant/20">
                        <p class="text-xs text-on-surface-variant">Montant Total</p>
                        <p class="text-xl font-bold text-on-surface">{{$order->total_price}}HD</p>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <form action="{{ route('prestataire.orders.terminer',$order) }}" method="POST">
                            @csrf
                        <button type="submit"
                            class="bg-primary text-on-primary px-4 py-2 rounded-xl text-sm font-bold hover:shadow-md transition-all scale-95 active:scale-90">Marquer
                            comme terminé</button>
                        </form>
                        <button
                            class="bg-surface-container-high text-on-surface-variant px-4 py-2 rounded-xl text-sm font-semibold transition-all scale-95 active:scale-90">Contacter
                            le client</button>
                    </div>
                </div>
                @endif

                 @if ($order->status === "finished")
                   <div
                    class="group bg-surface-container-lowest rounded-2xl p-6 transition-all hover:shadow-xl hover:shadow-slate-200/50 flex flex-col lg:flex-row lg:items-center gap-6 opacity-80 grayscale-[0.2]">
                    <div class="flex-1 flex flex-col md:flex-row md:items-center gap-6">
                        <div
                            class="h-14 w-14 rounded-full bg-surface-container-low flex items-center justify-center shrink-0">
                            <span
                                class="material-symbols-outlined text-on-surface-variant text-3xl">check_circle</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-1">
                                <h3 class="font-bold text-lg text-on-surface">{{$order->client->first_name." ".$order->client->last_name}}</h3>
                                <span
                                    class="px-3 py-1 bg-surface-container-high text-on-secondary-container text-[10px] font-black uppercase tracking-widest rounded-full">TERMINÉE</span>
                            </div>
                            <p class="text-sm text-on-surface-variant font-medium">{{$order->name}}</p>
                            <div class="flex items-center gap-4 mt-2 text-xs text-on-surface-variant/70">
                                <span class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">calendar_month</span> {{ ucfirst($order->created_at->translatedFormat('d F Y')) }}</span>
                                <span class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">location_on</span>{{$order->client->ville}}</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start lg:items-end gap-1 px-4 lg:border-x border-outline-variant/20">
                        <p class="text-xs text-on-surface-variant">Montant Total</p>
                        <p class="text-xl font-bold text-on-surface">{{$order->total_price}}HD</p>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <button
                            class="bg-surface-container-high text-on-surface-variant px-4 py-2 rounded-xl text-sm font-semibold transition-all scale-95 active:scale-90">Voir
                            facture</button>
                        <button
                            class="p-2 bg-surface-container-high text-on-surface-variant rounded-xl hover:bg-primary-container/20 transition-all">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </div>
                </div>
                    
                @endif

            @endforeach
               
            </div>
            <!-- Pagination or Load More -->
            <div class="mt-12 flex justify-center">
                <button
                    class="group flex items-center gap-2 text-on-surface-variant font-semibold hover:text-primary transition-colors">
                    Charger plus de commandes
                    <span
                        class="material-symbols-outlined transition-transform group-hover:translate-y-1">expand_more</span>
                </button>
            </div>
        </main>
    </div>
   @endsection