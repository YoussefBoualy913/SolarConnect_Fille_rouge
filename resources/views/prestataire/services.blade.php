@extends('layouts.prestataire')
@vite('resources/js/prestataireService.js')
@section('title', 'Gestion des Services | SolarGrid Pro')

@section('search')
    <div class="h-6 w-px bg-slate-200 mx-2"></div>
    <div class="flex items-center bg-slate-100 dark:bg-slate-800 rounded-full px-4 py-1.5 gap-2">
        <span class="material-symbols-outlined text-slate-400 text-sm" data-icon="search">search</span>
        <input class="bg-transparent border-none focus:ring-0 text-sm w-64 placeholder:text-slate-400"
            placeholder="Rechercher un service..." type="text" />
    </div>
@endsection

@section('Services')
flex items-center gap-3 px-3 py-2 text-orange-700 dark:text-orange-300 bg-white dark:bg-slate-900 rounded-lg shadow-sm font-manrope font-medium text-sm
@endsection

@section('Dashboard')
flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm
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
                <form  action="{{ route('prestataire.services.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-6" >
                @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Titre
                                du service</label>
                            <input
                                class="w-full bg-surface-container-low border-none rounded-lg p-3 focus:ring-1 focus:ring-primary/20 transition-all placeholder:text-slate-400"
                                placeholder="ex: Installation Panneaux 6kW" name="title" type="text" />
                             @error('title')
                                      <p class="text-red-500">{{ $message }}</p>
                             @enderror
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Catégorie</label>
                            <select name="category_id"
                                class="w-full bg-surface-container-low border-none rounded-lg p-3 focus:ring-1 focus:ring-primary/20 transition-all text-on-surface-variant">
                                <option value="">Choisir catégorie</option>
                                @foreach ($categories as $category)
                                    
                                <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                @endforeach
                                
                            </select>
                             @error('category_id')
                                      <p class="text-red-500">{{ $message }}</p>
                             @enderror
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label
                            class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Description</label>
                        <textarea  name="description"
                            class="w-full bg-surface-container-low border-none rounded-lg p-3 focus:ring-1 focus:ring-primary/20 transition-all placeholder:text-slate-400"
                            placeholder="Détaillez les spécificités techniques et les avantages de votre offre..." rows="4"></textarea>
                         @error('description')
                                      <p class="text-red-500">{{ $message }}</p>
                         @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Prix
                                estimé (MAD)</label>
                            <div class="relative">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 font-bold">HD</span>
                                <input  name="price"
                                    class="w-full bg-surface-container-low border-none rounded-lg p-3 pl-8 focus:ring-1 focus:ring-primary/20 transition-all"
                                    type="number" />
                                 @error('price')
                                      <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">
                                Durée estimée
                            </label>

                            <div class="flex gap-2">
                                <!-- valeur -->
                                <input type="number" name="duration_value" min="1"
                                    class="w-1/2 bg-surface-container-low border-none rounded-lg p-3 focus:ring-1 focus:ring-primary/20 transition-all"
                                    placeholder="ex: 2" />
                                

                                <!-- unité -->
                                <select name="duration_unit"
                                    class="w-1/2 bg-surface-container-low border-none rounded-lg p-3 focus:ring-1 focus:ring-primary/20 transition-all">
                                    <option value="minutes">Minutes</option>
                                    <option value="hours">Heures</option>
                                    <option value="days">Jours</option>
                                </select>
                            </div>
                            @error('duration_value')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                            @error('duration_unit')
                                 <p class="text-red-500">{{ $message }}</p>
                            @enderror
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
                            <img id="previewImg" class="w-full h-full object-cover" />

                            <div
                                class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
                                <button type="button" id="removeImage" class="text-white">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </div>
                         @error('image')
                                      <p class="text-red-500">{{ $message }}</p>
                         @enderror

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
                    <span class="text-xs font-bold bg-secondary-container text-on-secondary-container px-2 py-1 rounded">{{$user->services->count() }}</span>
                </div>
               
                @foreach ($user->services as $service )
                    @if ($service->status  === "active")
                        
                    
                    <div
                class="bg-surface-container-low rounded-xl p-5 group hover:bg-surface-container transition-colors duration-300">
                <div class="flex gap-4">
                    <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                        @if($service->image_url)
                        <img alt="{{ $service->title }}" class="w-full h-full object-cover"
                        data-alt="modern solar array on a suburban house roof reflecting a bright golden sunset"
                        src="{{ asset('storage/' . $service->image_url)}}" />
                        @else
                         <div
                            class="w-20 h-20 rounded-lg bg-surface-container-high flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-slate-400" data-icon="image">image</span>
                        </div>
                        @endif


                    </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex justify-between items-start mb-1">
                                <h4 class="font-headline font-bold text-on-surface truncate">{{$service->title}}</h4>

                                <form action="{{ route('prestataire.services.inactiver',$service) }}" method="POST">
                                    @csrf
                                    @method('patch')
                                    <button type="submit"
                                    class="flex items-center gap-1 text-[10px] font-bold text-tertiary uppercase bg-tertiary-fixed px-1.5 py-0.5 rounded">
                                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary animate-pulse"></span> Désactive
                                </button>
                            </form>
                        
                            </div>
                            <p class="text-xs text-on-surface-variant line-clamp-2 mb-3">{{$service->description}}</p>
                                <div class="flex items-center gap-4 text-xs font-medium text-secondary">
                                <span class="flex items-center gap-1"><span class="text-sm font-semibold">MAD</span>
                                    8,400</span>
                                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm"
                                            data-icon="schedule">schedule</span>{{$service->duration_formatted}}</span>
                                        </div>
                                    </div>
                                </div>
                     <div class="mt-4 pt-4 border-t border-outline-variant/10 flex justify-end gap-2">
                        <div>
                            <button
                            onclick='openEditModal(@json($service))'
                            class="text-[10px] font-bold uppercase tracking-wider text-primary hover:underline">update</button>
                        </div>
                      
                        <form action="{{ route('prestataire.services.destroy',$service->id) }}" method="POST" >
                         @csrf
                         @method('delete')
                         <button
                            class="text-[10px] font-bold uppercase tracking-wider text-red-500 hover:text-red-600 hover:underline transition-colors">delete</button>
                        </form>
                    </div>
                    
                    </div>
         
                         @endif
                    @if ($service->status === "inactive")
                   <div class="bg-surface-container-low/50 rounded-xl p-5 border border-dashed border-outline-variant/40">
                    <div class="flex gap-4 opacity-70">
                       <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                        @if($service->image_url)
                        <img alt="{{ $service->title }}" class="w-full h-full object-cover"
                        data-alt="modern solar array on a suburban house roof reflecting a bright golden sunset"
                        src="{{ asset('storage/' . $service->image_url)}}" />
                        @else
                         <div
                            class="w-20 h-20 rounded-lg bg-surface-container-high flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-slate-400" data-icon="image">image</span>
                        </div>
                        @endif


                    </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex justify-between items-start mb-1">
                                <h4 class="font-headline font-bold text-on-surface truncate">{{ $service->title }}
                                </h4>
                             <form action="{{ route('prestataire.services.activer',$service) }}" method="POST">
                                @csrf
                                @method('patch')
                                <button
                                    class="text-[10px] font-bold text-on-surface-variant uppercase bg-surface-container-high px-1.5 py-0.5 rounded">
                                    active
                                </button>
                            </form>
                            </div>
                            <p class="text-xs text-on-surface-variant line-clamp-2 mb-3">{{ $service->description }}

                            </p>
                            <div class="flex items-center gap-4 text-xs font-medium text-secondary">
                                <span class="flex items-center gap-1"><span class="text-sm font-semibold">MAD</span>
                                    1,200
                                </span>
                                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm"
                                        data-icon="schedule">schedule</span> 1 jour</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-outline-variant/10 flex justify-end gap-2">
                        <button
                           onclick='openEditModal(@json($service))'
                            class="text-[10px] font-bold uppercase tracking-wider text-primary hover:underline">update</button>
                        <form action="{{ route('prestataire.services.destroy',$service->id) }}" method="POST" >
                         @csrf
                         @method('delete')
                            <button  type="submit"
                            class="text-[10px] font-bold uppercase tracking-wider text-red-500 hover:text-red-600 hover:underline transition-colors">delete</button>
                        </form>
                    </div>
                </div>
                         @endif
                 @endforeach ()
               
              
                <!-- Summary Stats Card -->

            </section>
        </div>
    </div>
@endsection
@section('popup')
 {{-- EDIT MODAL  --}}
<div id="editModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    
    <div class="bg-white w-full max-w-2xl rounded-xl p-6 relative">
        
         {{-- Close --}}
        <button onclick="closeEditModal()" class="absolute top-4 right-4 text-gray-500">
            ✕
        </button>

        <h3 class="text-xl font-bold mb-6">Modifier Service</h3>

        <form id="editForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="space-y-4">
                 <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Titre
                                du service</label>
                <input type="text" name="title" id="editTitle"
                    class="w-full p-3 rounded-lg border"
                    placeholder="Titre">
                 <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">description</label>
                <textarea name="description" id="editDescription"
                    class="w-full p-3 rounded-lg border"
                    placeholder="Description"></textarea>
                 <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">price</label>
                <input type="number" name="price" id="editPrice"
                    class="w-full p-3 rounded-lg border"
                    placeholder="Prix">

                <div class="flex gap-2">
                     <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Durée estimée</label>
                    <input type="number" name="duration_value" id="editDurationValue"
                        class="w-1/2 p-3 rounded-lg border">

                    <select name="duration_unit" id="editDurationUnit"
                        class="w-1/2 p-3 rounded-lg border">
                        <option value="minutes">Minutes</option>
                        <option value="hours">Heures</option>
                        <option value="days">Jours</option>
                    </select>
                </div>
                

                <button type="submit"
                    class="w-full bg-primary text-white py-3 rounded-lg">
                    Mettre à jour
                </button>

            </div>
        </form>
    </div>
</div>
@endsection
