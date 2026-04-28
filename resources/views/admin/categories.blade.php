@extends('layouts.admin')

@section('title')
SolarConnect - Gestion des Categories
@endsection

@section('vite')
@vite('resources/js/categories.js')
@endsection

@section('content')
        <!-- Content Canvas -->
        <div class="p-10 bg-surface-container-low min-h-[calc(100vh-64px)]">
            <!-- Hero Header Section -->
            <div class="mb-12 flex justify-between items-end flex-wrap gap-4">
                <div>
                    <span class="inline-block py-1 px-3 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase tracking-widest rounded-full mb-3">Système Central</span>
                    <h2 class="font-headline font-black text-4xl tracking-tighter text-on-surface">Gestion des Catégories</h2>
                    <p class="text-on-surface-variant mt-2 max-w-md">Configurez les services, maintenances et audits proposés dans l'écosystème SolarConnect.</p>
                </div>
                <button id="openAddModalBtn" class="bg-gradient-to-br from-primary to-primary-container px-5 py-2.5 rounded-xl text-white font-bold text-sm shadow-lg shadow-primary/20 flex items-center gap-2 transition-all hover:scale-105">
                    <span class="material-symbols-outlined text-sm">add</span>
                    Nouvelle catégorie
                </button>
            </div>

            <!-- Tableau des catégories avec actions (édition & suppression) -->
            <div class="bg-surface-container-lowest rounded-2xl shadow-md overflow-hidden border border-outline-variant/30">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-high">
                           
                                
                            
                    
                            <tr>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Nom de la catégorie</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="categoriesTableBody">
                             @foreach ($categories as $category)
                            <tr class="category-row border-b border-outline-variant/20 hover:bg-surface-container-low/60 transition">
                                <td class="px-6 py-4 font-medium text-on-surface">
                                    <div class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-primary-container text-xl">category</span>
                                        {{ $category->name}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        <button class="edit-category-btn text-blue-600 hover:text-primary transition-all btn-icon" data-id="{{ $category->id }}" data-name="{{ $category->name}}">
                                            <span class="material-symbols-outlined text-md">edit</span>
                                        </button>
                                        <form action="{{route('admin.categories.destroy',$category)}}" method="POST">

                                        @csrf
                                        @method('delete')


                                            <button type="submit" class="delete-category-btn text-error/80 hover:text-error transition-all btn-icon" ">
                                                <span class="material-symbols-outlined text-md">delete</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div id="emptyMessage" class="py-12 text-center text-on-surface-variant hidden flex-col items-center gap-2">
                    <span class="material-symbols-outlined text-5xl">category</span>
                    <p class="font-medium">Aucune catégorie trouvée.</p>
                    <p class="text-xs">Ajoutez une nouvelle catégorie pour commencer.</p>
                </div>
            </div>
        </div>
@endsection

@section('model')
    <!-- MODAL AJOUT / ÉDITION (Petit formulaire juste pour le nom) -->
    <div id="categoryModal" class="fixed inset-0 z-50 hidden items-center justify-center transition-all duration-200">
        <div class="absolute inset-0 bg-black/50" id="modalBackdrop"></div>
        <div class="bg-surface-container-lowest rounded-2xl shadow-2xl w-full max-w-md mx-4 transform transition-all p-6 relative z-10">
            <div class="flex justify-between items-center mb-5">
                <h3 id="modalTitle" class="font-headline font-extrabold text-xl text-on-surface">Ajouter une catégorie</h3>
                <button id="closeModalBtn" class="text-on-surface-variant hover:text-error transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form id="categoryForm" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-sm font-bold text-on-surface-variant mb-2">Nom de la catégorie</label>
                    <input type="text" name="name" id="categoryNameInput" class="w-full px-4 py-2.5 rounded-xl border border-outline-variant bg-surface focus:ring-2 focus:ring-primary/30 focus:border-primary outline-none transition" placeholder="Ex: Installation résidentielle" required autocomplete="off" />
                </div>
                <div class="flex gap-3 justify-end">
                    <button type="button" id="cancelModalBtn" class="px-5 py-2 rounded-lg border border-outline-variant text-on-surface-variant font-semibold hover:bg-surface-container-high transition">Annuler</button>
                    <button type="submit" id="submitBtn" class="px-5 py-2 rounded-lg bg-primary text-white font-bold shadow-sm hover:bg-primary-container transition">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
   
    @if (session('success'))
        
    <div id="toast" class="fixed bottom-6 right-6 z-50 px-5 py-3 rounded-xl shadow-xl text-sm font-bold flex items-center gap-2 transition-all duration-300 transform translate-y-0 opacity-100 bg-primary-container text-on-primary-container">
        <span class="material-symbols-outlined text-sm">check_circle</span><span>{{session('success')}}</span>
     @endif
  </div>
@endsection

    
   
