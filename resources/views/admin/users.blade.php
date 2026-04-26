<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SolarConnect - Gestion des Utilisateurs</title>
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
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .badge-banned {
            background-color: #ffdad6;
            color: #ba1a1a;
            border-radius: 9999px;
            padding: 0.25rem 0.75rem;
            font-size: 0.7rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }
        .badge-active {
            background-color: #d9e3f6;
            color: #3d4756;
            border-radius: 9999px;
            padding: 0.25rem 0.75rem;
            font-size: 0.7rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }
        .btn-ban {
            background-color: #ffdad6;
            color: #ba1a1a;
            transition: all 0.2s;
        }
        .btn-ban:hover {
            background-color: #ba1a1a;
            color: white;
        }
        .btn-unban {
            background-color: #d9e3f6;
            color: #3d4756;
            transition: all 0.2s;
        }
        .btn-unban:hover {
            background-color: #3d4756;
            color: white;
        }
        .pagination-btn {
            transition: all 0.2s;
        }
        .pagination-btn:hover:not(.active-page) {
            background-color: #f97316;
            color: white;
            transform: translateY(-1px);
        }
        .active-page {
            background-color: #f97316;
            color: white;
            box-shadow: 0 4px 8px rgba(249,115,22,0.2);
        }
        .user-row:hover {
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
            <a class="flex items-center text-orange-600 dark:text-orange-400 bg-white dark:bg-slate-900 rounded-l-full ml-4 pl-6 py-3 shadow-sm transition-all translate-x-1" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="group">group</span>
                <span class="font-headline font-bold text-lg">Utilisateurs</span>
            </a>
            <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="category">category</span>
                <span class="font-headline font-bold text-lg">Catégories</span>
            </a>
            <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="rate_review">rate_review</span>
                <span class="font-headline font-bold text-lg">Avis</span>
            </a>
            <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="query_stats">query_stats</span>
                <span class="font-headline font-bold text-lg">Statistiques</span>
            </a>
        </nav>
        <div class="px-8 mt-auto pt-8 border-t border-slate-200 dark:border-slate-800">
            <a class="flex items-center text-slate-500 dark:text-slate-400 px-2 py-3 hover:text-error transition-all" href="#">
                <span class="material-symbols-outlined mr-4" data-icon="logout">logout</span>
                <span class="font-headline font-bold text-lg">Déconnexion</span>
            </a>
        </div>
    </aside>

    <main class="ml-72 min-h-screen">
        <!-- TopAppBar -->
        <header class="sticky top-0 z-40 w-full bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl shadow-[0_12px_32px_rgba(18,28,40,0.06)] flex justify-between items-center px-8 h-16">
           
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
        <div class="p-10 bg-surface-container-low min-h-[calc(100vh-64px) ]">
            <!-- Hero Header Section -->
            <div class="mb-12 flex justify-between items-end flex-wrap gap-6">
                <div>
                    <span class="inline-block py-1 px-3 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase tracking-widest rounded-full mb-3">Gestion des comptes</span>
                    <h2 class="font-headline font-black text-4xl tracking-tighter text-on-surface">Utilisateurs</h2>
                    <p class="text-on-surface-variant mt-2 max-w-md">Consultez, bannissez ou réactivez les utilisateurs de la plateforme SolarConnect.</p>
                </div>
                <div class="flex gap-2">
                    <div class="bg-surface-container-high/60 rounded-full px-4 py-2 text-sm font-semibold text-on-surface-variant flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-base">people</span>
                        <span>{{ $users->total() }} utilisateurs</span>
                    </div>
                </div>
            </div>
             <div class="flex items-center mb-4 gap-4">
                <div class="relative group ">
                    <form action="{{ route('admin.users.index') }}"" class="flex gap-4" method="GET">
                        
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none" data-icon="search">search</span>
                    <input  name="search" value="@if ($search){{ $search }}@endif" class="bg-surface-container-low border-none rounded-xl pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/20 w-64 transition-all" placeholder="Rechercher un utilisateur..." type="text" />
                    <button type="submit"  class="bg-surface-container-high/60 rounded-full px-4 py-2 text-sm font-semibold text-on-surface-variant flex items-center gap-2">
                        Rechercher
                    </button>
                    </form>
                </div>
            </div>
            <!-- Tableau des utilisateurs - Version statique HTML/CSS pur sans JS -->
            <div class="bg-surface-container-lowest rounded-2xl shadow-md overflow-hidden border border-outline-variant/30">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-high">
                            <tr>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Utilisateur</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Email</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Rôle</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Statut</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Page 1 : Utilisateurs 1 à 5 -->
                            <!-- Ligne 1 - Sophie Martin (Actif) -->
                            @foreach ($users as  $user)
                                
                            <tr class="user-row border-b border-outline-variant/20 hover:bg-surface-container-low/60 transition">
                                <td class="px-6 py-4 font-medium text-on-surface">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary text-sm">person</span>
                                        </div>
                                        {{ $user->first_name." ".$user->last_name }}
                                    </div>
                                </td>
                                <td class="text-on-surface-variant">{{ $user->email }}</td>
                                <td><span class="inline-block px-2 py-1 rounded-md bg-surface-container-high text-xs font-semibold">{{$user->role}}</span></td>

                                <td>
                                    @if ($user->status === "active")
                                        
                                    <span class="badge-active"><span class="material-symbols-outlined text-xs">check_circle</span> Actif</span>
                                   @else
                                   <span class="badge-banned"><span class="material-symbols-outlined text-xs">gavel</span> Banni</span>
                                    @endif
                                </td>
                                @if ($user->status === "active")
                                  
                                      <td class="text-center">
                                        @if ($user->role->value === "admin")
                                            
                                        <span class="material-symbols-outlined text-sm">_</span>
                                        @else
                                        <form action="{{ route('admin.banni',$user) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                        <button type="submit" class="btn-ban px-3 py-1.5 rounded-lg text-xs font-bold flex items-center gap-1 mx-auto"><span class="material-symbols-outlined text-sm">block</span> Bannir</button>
                                        </form>
                                        @endif
                                    </td>
                                @endif
                                @if ($user->status === "inactive")
                                    <form action="{{ route('admin.debanni',$user) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                <td class="text-center"><button type="submit" class="btn-unban px-3 py-1.5 rounded-lg text-xs font-bold flex items-center gap-1 mx-auto"><span class="material-symbols-outlined text-sm">restore_from_trash</span> Débannir</button></td>
                                </form>
                                @endif
                            </tr>
                            @endforeach
                        
                            
                            
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-5 border-t border-outline-variant/20 bg-surface-container-low/40  justify-between items-center flex-wrap ">
                {{ $users->links() }}
                </div>
                {{-- <!-- Pagination : deux boutons (Précédent / Suivant) et indicateur de page -->
                <div class="px-6 py-5 border-t border-outline-variant/20 bg-surface-container-low/40 flex justify-between items-center flex-wrap gap-4">
                    <div class="text-sm text-on-surface-variant">
                        Affichage de <strong>1</strong> à <strong>5</strong> sur <strong>24</strong> utilisateur(s)
                    </div>
                    <div class="flex gap-2 items-center">
                        <button disabled class="pagination-btn px-4 py-2 rounded-xl bg-surface-container-high text-on-surface-variant/50 font-semibold text-sm cursor-not-allowed flex items-center gap-1 opacity-50">
                            <span class="material-symbols-outlined text-sm">chevron_left</span>
                            Précédent
                        </button>
                        <div class="flex gap-1">
                            <button class="pagination-btn active-page w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold">1</button>
                            <button class="pagination-btn w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold text-on-surface-variant hover:bg-primary hover:text-white">2</button>
                            <button class="pagination-btn w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold text-on-surface-variant hover:bg-primary hover:text-white">3</button>
                            <button class="pagination-btn w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold text-on-surface-variant hover:bg-primary hover:text-white">4</button>
                            <span class="text-on-surface-variant px-1">...</span>
                            <button class="pagination-btn w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold text-on-surface-variant hover:bg-primary hover:text-white">5</button>
                        </div>
                        <button class="pagination-btn px-4 py-2 rounded-xl bg-surface-container-high text-on-surface-variant font-semibold text-sm hover:bg-primary hover:text-white transition-all flex items-center gap-1">
                            Suivant
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div> --}}
            </div>

          
        </div>
    </main>

    
</body>
</html>