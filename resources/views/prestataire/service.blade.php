@extends('layouts.prestataire')
 @vite('resources/js/prestataireService.js')
@section('title','Gestion des Services | SolarGrid Pro')

@section('search') 
 <div class="h-6 w-px bg-slate-200 mx-2"></div>
                <div class="flex items-center bg-slate-100 dark:bg-slate-800 rounded-full px-4 py-1.5 gap-2">
                    <span class="material-symbols-outlined text-slate-400 text-sm" data-icon="search">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-sm w-64 placeholder:text-slate-400"
                        placeholder="Rechercher un service..." type="text" />
</div>      
@endsection

@section('content')
<div class="p-8 max-w-7xl mx-auto">
            <!-- Header Section -->
            <div class="flex justify-between items-end mb-10">
                <div class="space-y-2">
                    <span class="text-primary font-headline font-bold text-sm tracking-widest uppercase">Espace
                        Prestataire</span>
                    <h1 class="text-4xl font-headline font-black text-on-surface tracking-tight">Gestion des Services
                    </h1>
                    <p class="text-on-surface-variant max-w-xl">Configurez et gérez vos offres de solutions
                        photovoltaïques. Ajoutez de nouveaux services pour étendre votre rayonnement.</p>
                </div>
              
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Service Form (As requested: New Service focus) -->
                <section
                    class="lg:col-span-7 bg-surface-container-lowest rounded-xl p-8 border border-outline-variant/20 shadow-sm">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-10 h-10 rounded-lg bg-primary-container/20 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary" data-icon="edit_note">edit_note</span>
                        </div>
                        <h3 class="text-xl font-headline font-bold">Nouveau Service</h3>
                    </div>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Titre
                                    du service</label>
                                <input
                                    class="w-full bg-surface-container-low border-none rounded-lg p-3 focus:ring-1 focus:ring-primary/20 transition-all placeholder:text-slate-400"
                                    placeholder="ex: Installation Panneaux 6kW" type="text" />
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Catégorie</label>
                                <select
                                    class="w-full bg-surface-container-low border-none rounded-lg p-3 focus:ring-1 focus:ring-primary/20 transition-all text-on-surface-variant">
                                    <option>Installation</option>
                                    <option>Maintenance</option>
                                    <option>Audit Énergétique</option>
                                    <option>Réparation</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Description</label>
                            <textarea
                                class="w-full bg-surface-container-low border-none rounded-lg p-3 focus:ring-1 focus:ring-primary/20 transition-all placeholder:text-slate-400"
                                placeholder="Détaillez les spécificités techniques et les avantages de votre offre..."
                                rows="4"></textarea>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Prix
                                    estimé (€)</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 font-bold">€</span>
                                    <input
                                        class="w-full bg-surface-container-low border-none rounded-lg p-3 pl-8 focus:ring-1 focus:ring-primary/20 transition-all"
                                        type="number" />
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Durée
                                    estimée</label>
                                <input
                                    class="w-full bg-surface-container-low border-none rounded-lg p-3 focus:ring-1 focus:ring-primary/20 transition-all"
                                    placeholder="ex: 2 jours" type="text" />
                            </div>
                        </div>
                      <div class="space-y-4">
    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">
        Image
    </label>

    <!-- Upload container -->
    <label id="uploadBox"
        class="aspect-square w-40 rounded-xl border-2 border-dashed border-outline-variant/40 
               flex flex-col items-center justify-center gap-2 text-on-surface-variant 
               hover:border-primary/40 hover:bg-primary/5 cursor-pointer transition-all">

        <input type="file" name="image" accept="image/*" class="hidden" id="imageInput">

        <span class="material-symbols-outlined text-3xl">add_a_photo</span>
        <span class="text-[10px] font-bold uppercase">Ajouter</span>
    </label>

    <!-- Preview -->
    <div id="preview" class="hidden aspect-square w-40 rounded-xl overflow-hidden relative group">
        <img id="previewImg" class="w-full h-full object-cover"/>

        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
            <button type="button" id="removeImage" class="text-white">
                <span class="material-symbols-outlined">delete</span>
            </button>
        </div>
    </div>
</div>
                        <div class="pt-6 flex gap-4">
                        
                            <button
                                class="flex-1 py-4 rounded-xl font-headline font-bold text-on-primary bg-primary hover:bg-primary-fixed-variant transition-colors shadow-lg"
                                type="submit">Publier le Service</button>
                        </div>
                    </form>
                </section>
                <!-- Active Services List -->
                <section class="lg:col-span-5 space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-headline font-bold">Services Actifs</h3>
                        <span
                            class="text-xs font-bold bg-secondary-container text-on-secondary-container px-2 py-1 rounded">4
                            Services</span>
                    </div>
                    <!-- Service Card 1 -->
                    <div
                        class="bg-surface-container-low rounded-xl p-5 group hover:bg-surface-container transition-colors duration-300">
                        <div class="flex gap-4">
                            <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                                <img alt="Installation 6kW" class="w-full h-full object-cover"
                                    data-alt="modern solar array on a suburban house roof reflecting a bright golden sunset"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxKbV9hbFZWFWkV3dl8io8lgsc_3onLDbHzMOqFPeawfrp9o5GTLaSGSfsJDty2iSmLtRheHrmWtsPevlS0d8T1Q2fvVNTVkndpQPF9Bm_WI6XNJGZlRfsMI4yb24me5uYBwxKFO_6GNVzSc5aD8cdLt3YkjjSLRBcFMykmUU7gMlW3zvogoc_KfShDIkclz9gohP8YAVSQas3xeq0vnXaPfKZ880tDozZktyKLyP0Waw3J8Ezq_NCO0ZENZ0jn9zPoHfo3rmQigo" />
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="font-headline font-bold text-on-surface truncate">Installation Panneaux
                                        6kW</h4>
                                    <span
                                        class="flex items-center gap-1 text-[10px] font-bold text-tertiary uppercase bg-tertiary-fixed px-1.5 py-0.5 rounded">
                                        <span class="w-1.5 h-1.5 rounded-full bg-tertiary animate-pulse"></span> Active
                                    </span>
                                </div>
                                <p class="text-xs text-on-surface-variant line-clamp-2 mb-3">Installation complète haute
                                    performance avec onduleur hybride nouvelle génération.</p>
                                <div class="flex items-center gap-4 text-xs font-medium text-secondary">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm" data-icon="euro">euro</span>
                                        8,400€</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm"
                                            data-icon="schedule">schedule</span> 3 jours</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Card 2 -->
                    <div
                        class="bg-surface-container-low rounded-xl p-5 group hover:bg-surface-container transition-colors duration-300">
                        <div class="flex gap-4">
                            <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                                <img alt="Maintenance Annuelle" class="w-full h-full object-cover"
                                    data-alt="close up of a professional using a specialized brush to clean solar panels on a sunny day"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYstRdMjAcsyWioVhrw2Dku-QsdXGsa2AyQJtEzsLDl8bwSIe6uzhwbVWIyXHwvk1lxbsQPYMgsoEv1UPfFaVTeb03ddapDG9gTdR_O9xYhqU1D9Pg8lgULCgsKWl43oJmKS5Uprp_6gq-iHF2Jr9OwepA1hAgvg87CJeuezfVKglGT3oSK9rZW__boQoPgP2IOqmWrSnB4l7X82XdZxvQiFZUKo2rLZ0UJmLdsQo7nJbISUd5pYBJzIJ4bYg9U4Vw0AefKhWAffg" />
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="font-headline font-bold text-on-surface truncate">Maintenance Annuelle
                                    </h4>
                                    <span
                                        class="flex items-center gap-1 text-[10px] font-bold text-tertiary uppercase bg-tertiary-fixed px-1.5 py-0.5 rounded">
                                        <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Active
                                    </span>
                                </div>
                                <p class="text-xs text-on-surface-variant line-clamp-2 mb-3">Nettoyage, vérification des
                                    connectiques et optimisation de la production annuelle.</p>
                                <div class="flex items-center gap-4 text-xs font-medium text-secondary">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm" data-icon="euro">euro</span>
                                        250€</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm"
                                            data-icon="schedule">schedule</span> 4 heures</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Card 3 (Draft) -->
                    <div
                        class="bg-surface-container-low/50 rounded-xl p-5 border border-dashed border-outline-variant/40">
                        <div class="flex gap-4 opacity-70">
                            <div
                                class="w-20 h-20 rounded-lg bg-surface-container-high flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-slate-400" data-icon="image">image</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="font-headline font-bold text-on-surface truncate">Audit Énergétique Pro
                                    </h4>
                                    <span
                                        class="text-[10px] font-bold text-on-surface-variant uppercase bg-surface-container-high px-1.5 py-0.5 rounded">
                                        Draft
                                    </span>
                                </div>
                                <p class="text-xs text-on-surface-variant line-clamp-2 mb-3">Analyse complète des
                                    besoins énergétiques pour bâtiments tertiaires et industriels.</p>
                                <div class="flex items-center gap-4 text-xs font-medium text-secondary">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm" data-icon="euro">euro</span>
                                        1,200€</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm"
                                            data-icon="schedule">schedule</span> 1 jour</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-4 border-t border-outline-variant/10 flex justify-end gap-2">
                            <button
                                class="text-[10px] font-bold uppercase tracking-wider text-primary hover:underline">Continuer
                                l'édition</button>
                        </div>
                    </div>
                    <!-- Summary Stats Card -->
                    
                </section>
            </div>
        </div>
@endsection