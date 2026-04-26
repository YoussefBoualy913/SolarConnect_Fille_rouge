<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SolarConnect - Gestion des Catégories</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#574500",
                        "tertiary": "#735c00",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-container": "#582200",
                        "error": "#ba1a1a",
                        "primary-container": "#f97316",
                        "on-secondary-container": "#596373",
                        "secondary": "#555f6f",
                        "primary": "#9d4300",
                        "tertiary-container": "#cea700",
                        "secondary-fixed": "#d9e3f6",
                        "inverse-on-surface": "#eaf1ff",
                        "error-container": "#ffdad6",
                        "surface-dim": "#d1dbec",
                        "secondary-container": "#d6e0f3",
                        "surface-bright": "#f8f9ff",
                        "surface": "#f8f9ff",
                        "on-surface": "#121c28",
                        "on-primary-fixed-variant": "#783200",
                        "on-secondary-fixed": "#121c2a",
                        "on-background": "#121c28",
                        "on-primary-fixed": "#341100",
                        "primary-fixed": "#ffdbca",
                        "on-tertiary-container": "#4e3e00",
                        "tertiary-fixed": "#ffe083",
                        "inverse-surface": "#27313e",
                        "on-tertiary": "#ffffff",
                        "surface-variant": "#d9e3f4",
                        "background": "#f8f9ff",
                        "surface-container-low": "#eef4ff",
                        "surface-container-high": "#dfe9fa",
                        "outline-variant": "#e0c0b1",
                        "surface-container-highest": "#d9e3f4",
                        "on-error": "#ffffff",
                        "surface-tint": "#9d4300",
                        "on-surface-variant": "#584237",
                        "on-secondary-fixed-variant": "#3d4756",
                        "tertiary-fixed-dim": "#eec200",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#231b00",
                        "primary-fixed-dim": "#ffb690",
                        "outline": "#8c7164",
                        "surface-container": "#e5eeff",
                        "secondary-fixed-dim": "#bdc7d9",
                        "inverse-primary": "#ffb690",
                        "on-secondary": "#ffffff"
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
     @vite('resources/js/categories.js')
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-header {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .btn-icon {
            transition: all 0.2s ease;
        }
        .btn-icon:hover {
            transform: scale(1.05);
        }
        .modal-overlay {
            background-color: rgba(0,0,0,0.5);
            backdrop-filter: blur(4px);
        }
        /* Pour les animations légères */
        .category-row {
            transition: background 0.15s;
        }
        .category-row:hover {
            background-color: #eef4ff;
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-screen w-72 bg-slate-50 dark:bg-slate-950 flex flex-col py-8 z-50">
        <div class="px-8 mb-10">
            <h1 class="font-headline font-extrabold text-xl text-slate-900 dark:text-white">SolarConnect</h1>
            <p class="text-xs text-on-surface-variant/70 font-semibold tracking-wider uppercase mt-1">Admin Console</p>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="dashboard">dashboard</span>
                <span class="font-headline font-bold text-lg">Dashboard</span>
            </a>
            <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="group">group</span>
                <span class="font-headline font-bold text-lg">Users</span>
            </a>
            <a class="flex items-center text-orange-600 dark:text-orange-400 bg-white dark:bg-slate-900 rounded-l-full ml-4 pl-6 py-3 shadow-sm transition-all translate-x-1" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="category">category</span>
                <span class="font-headline font-bold text-lg">Categories</span>
            </a>
            <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="rate_review">rate_review</span>
                <span class="font-headline font-bold text-lg">Reviews</span>
            </a>
            <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="query_stats">query_stats</span>
                <span class="font-headline font-bold text-lg">Statistics</span>
            </a>
        </nav>
        <div class="px-8 mt-auto pt-8 border-t border-slate-200 dark:border-slate-800">
            <a class="flex items-center text-slate-500 dark:text-slate-400 px-2 py-3 hover:text-error transition-all" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="logout">logout</span>
                <span class="font-headline font-bold text-lg">Logout</span>
            </a>
        </div>
    </aside>

    <main class="ml-72 min-h-screen">
        <!-- TopAppBar -->
        <header class="sticky top-0 z-40 w-full bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl shadow-[0_12px_32px_rgba(18,28,40,0.06)] flex justify-between items-center px-8 h-16">
            <div class="flex items-center gap-4">
                <div class="relative group">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none" data-icon="search">search</span>
                    <input id="searchInput" class="bg-surface-container-low border-none rounded-xl pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/20 w-64 transition-all" placeholder="Rechercher des catégories..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-6">
                <button class="text-slate-500 dark:text-slate-400 hover:text-orange-600 transition-colors">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button class="text-slate-500 dark:text-slate-400 hover:text-orange-600 transition-colors">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-800">
                    <img alt="Administrator Avatar" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFcenML2eezicFEoPDoRTbrMZBDNAyM1cSi4Sip3KH9fJq0sSzk98WboCvK67CUiT8MPpcIg1uDw2dig8Tj4HgKZnRWQxx22gHTMKQDOl2V8xBr8dz_TY8A-TDSXva9ZJZPzsbfNm_VuN_Yw_eoPjlBGvT3y_otQ0SYvKM-8uAgIPZZfP8_LyFRdX5lZe6rWjGFeWjKW0NeQvDxwBHEMJtlGJW6QTno7mFC0PUPY5tp-QQ_hv7KmsJ_e6awM3eN_HYiQVpcGPeUpM" />
                    <span class="font-['Inter'] text-sm font-semibold text-on-surface">Admin</span>
                </div>
            </div>
        </header>

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
    </main>

    <!-- MODAL AJOUT / ÉDITION (Petit formulaire juste pour le nom) -->
    <div id="categoryModal" class="fixed inset-0 z-50 hidden items-center justify-center transition-all duration-200">
        <div class="absolute inset-0 modal-overlay" id="modalBackdrop"></div>
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

    
    <!-- Note : Le design a été respecté avec le même système de couleurs, polices, ombres, composants Material Icons. -->
    <!-- Ajout d'un petit bloc de style optionnel pour les transitions -->
    <style>
        .modal-overlay {
            transition: background 0.2s ease;
        }
        .category-row td:first-child {
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
        }
        #emptyMessage {
            transition: all 0.2s;
        }
        button:focus-visible {
            outline: 2px solid #f97316;
            outline-offset: 2px;
        }
        input:focus {
            border-color: #f97316 !important;
        }
    </style>
</body>
</html>