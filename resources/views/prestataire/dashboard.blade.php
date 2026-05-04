
@extends('layouts.prestataire')
@vite('resources/js/prestataireService.js')
@section('title', 'Gestion des Services | SolarGrid Pro')



@section('Services')
flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm
@endsection

@section('Dashboard')
flex items-center gap-3 px-3 py-2 text-orange-700 dark:text-orange-300 bg-white dark:bg-slate-900 rounded-lg shadow-sm font-manrope font-medium text-sm
@endsection

@section('Reviews')
flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm
@endsection

@section('Orders')
flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm
@endsection

@section('Profile')
flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm
@endsection

@section('content')
        <!-- Page Dashboard Content -->
        <div class="p-8 max-w-7xl mx-auto space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h3 class="text-3xl font-black font-headline text-on-surface tracking-tight">Tableau de bord
                        Prestataire</h3>
                    <p class="text-on-surface-variant mt-1">Bienvenue, voici l'état de votre activité aujourd'hui.</p>
                </div>
                <div
                    class="flex items-center gap-2 text-sm font-medium text-on-surface-variant bg-surface-container-low px-4 py-2 rounded-xl">
                    <span class="material-symbols-outlined text-lg" data-icon="calendar_today">calendar_today</span>
                    <span>{{ ucfirst(now()->translatedFormat('d F Y')) }}</span>
                </div>
            </div>
            <!-- Bento Grid Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Revenue Card -->
                <div class="bg-surface-container-lowest p-6 rounded-xl transition-all hover:scale-[1.01]">
                    <div class="flex items-start justify-between">
                        <div class="p-3 bg-primary-container/10 rounded-lg text-primary">
                            <span class="material-symbols-outlined" data-icon="payments">payments</span>
                        </div>
                       
                    </div>
                    <div class="mt-4">
                        <p class="text-label-sm text-on-surface-variant font-medium">Revenu ce mois</p>
                        <h4 class="text-2xl font-black font-headline mt-1">{{ $stats["totalRevenue"] }} MAD</h4>
                    </div>
                </div>
                <!-- Orders Card -->
                <div class="bg-surface-container-lowest p-6 rounded-xl transition-all hover:scale-[1.01]">
                    <div class="flex items-start justify-between">
                        <div class="p-3 bg-secondary-container/30 rounded-lg text-secondary">
                            <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                        </div>
                        
                    </div>
                    <div class="mt-4">
                        <p class="text-label-sm text-on-surface-variant font-medium">Commandes actives</p>
                        <h4 class="text-2xl font-black font-headline mt-1">{{ $stats["orderspending"] }}</h4>
                    </div>
                </div>
                <!-- Rating Card -->
                <div class="bg-surface-container-lowest p-6 rounded-xl transition-all hover:scale-[1.01]">
                    <div class="flex items-start justify-between">
                        <div class="p-3 bg-tertiary-fixed/30 rounded-lg text-tertiary">
                            <span class="material-symbols-outlined" data-icon="star"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                       
                    </div>
                    <div class="mt-4">
                        <p class="text-label-sm text-on-surface-variant font-medium">Note moyenne</p>
                        <h4 class="text-2xl font-black font-headline mt-1">{{ $stats["note"] }}</h4>
                    </div>
                </div>
                <!-- Leads Card -->
                <div class="bg-surface-container-lowest p-6 rounded-xl transition-all hover:scale-[1.01]">
                    <div class="flex items-start justify-between">
                        <div class="p-3 bg-orange-100 rounded-lg text-orange-700">
                            <span class="material-symbols-outlined" data-icon="person_add">person_add</span>
                        </div>
                       
                    </div>
                    <div class="mt-4">
                        <p class="text-label-sm text-on-surface-variant font-medium">Nouveaux leads</p>
                        <h4 class="text-2xl font-black font-headline mt-1">{{ $stats["Nouveauxleads"] }}</h4>
                    </div>
                </div>
            </div>
            <!-- Main Interactive Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Recent Orders Table Container -->
                <div class="lg:col-span-2 bg-surface-container-low rounded-xl p-1 overflow-hidden">
                    <div class="bg-surface-container-lowest p-6 rounded-lg h-full">
                        <div class="flex items-center justify-between mb-6">
                            <h5 class="text-lg font-bold font-headline">Commandes Récentes</h5>
                            <button class="text-sm font-semibold text-primary hover:underline underline-offset-4">Voir
                                tout</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">
                                        <th class="pb-4 px-2">Client</th>
                                        <th class="pb-4 px-2">Service</th>
                                        <th class="pb-4 px-2">Statut</th>
                                        <th class="pb-4 px-2 text-right">Montant</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    <tr class="group hover:bg-slate-50 transition-colors">
                                        <td class="py-4 px-2">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold">
                                                    ML</div>
                                                <span class="font-medium text-sm">Marc Lemoine</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-2 text-sm text-on-surface-variant">Installation Panneaux 6kW
                                        </td>
                                        <td class="py-4 px-2">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                                Confirmé
                                            </span>
                                        </td>
                                        <td class="py-4 px-2 text-sm font-bold text-right">4 200 €</td>
                                    </tr>
                                    <tr class="group hover:bg-slate-50 transition-colors">
                                        <td class="py-4 px-2">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold">
                                                    SD</div>
                                                <span class="font-medium text-sm">Sophie Durand</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-2 text-sm text-on-surface-variant">Maintenance Annuelle</td>
                                        <td class="py-4 px-2">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
                                                En attente
                                            </span>
                                        </td>
                                        <td class="py-4 px-2 text-sm font-bold text-right">350 €</td>
                                    </tr>
                                    <tr class="group hover:bg-slate-50 transition-colors">
                                        <td class="py-4 px-2">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold">
                                                    PV</div>
                                                <span class="font-medium text-sm">Paul Vallet</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-2 text-sm text-on-surface-variant">Étude Faisabilité</td>
                                        <td class="py-4 px-2">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-bold bg-blue-100 text-blue-700">
                                                En cours
                                            </span>
                                        </td>
                                        <td class="py-4 px-2 text-sm font-bold text-right">150 €</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Upcoming Maintenance Widget -->
                <div class="bg-surface-container-low p-1 rounded-xl">
                    <div class="bg-surface-container-lowest p-6 rounded-lg h-full">
                        <h5 class="text-lg font-bold font-headline mb-6">Maintenance à venir</h5>
                        <div class="space-y-4">
                            <div
                                class="flex gap-4 items-start p-3 rounded-xl hover:bg-surface-container-low transition-colors border-l-4 border-orange-500">
                                <div
                                    class="flex flex-col items-center justify-center bg-surface-container-high w-12 h-12 rounded-lg">
                                    <span class="text-[10px] uppercase font-bold text-on-surface-variant">MAI</span>
                                    <span class="text-lg font-black leading-none">26</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Résidence Les Oliviers</p>
                                    <p class="text-xs text-on-surface-variant">Vérification onduleur • 09:30</p>
                                </div>
                            </div>
                            <div
                                class="flex gap-4 items-start p-3 rounded-xl hover:bg-surface-container-low transition-colors border-l-4 border-slate-300">
                                <div
                                    class="flex flex-col items-center justify-center bg-surface-container-high w-12 h-12 rounded-lg">
                                    <span class="text-[10px] uppercase font-bold text-on-surface-variant">MAI</span>
                                    <span class="text-lg font-black leading-none">28</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Mairie de Lyon</p>
                                    <p class="text-xs text-on-surface-variant">Nettoyage panneaux • 14:00</p>
                                </div>
                            </div>
                            <div
                                class="flex gap-4 items-start p-3 rounded-xl hover:bg-surface-container-low transition-colors border-l-4 border-slate-300">
                                <div
                                    class="flex flex-col items-center justify-center bg-surface-container-high w-12 h-12 rounded-lg">
                                    <span class="text-[10px] uppercase font-bold text-on-surface-variant">JUIN</span>
                                    <span class="text-lg font-black leading-none">02</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Villa Green</p>
                                    <p class="text-xs text-on-surface-variant">Contrôle annuel • 10:45</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 py-2.5 rounded-xl bg-surface-container-high text-on-surface font-bold text-sm hover:bg-surface-container-highest transition-colors">
                            Accéder au calendrier
                        </button>
                    </div>
                </div>
            </div>
            <!-- Performance Chart Area -->
           
        </div>
@endsection
  