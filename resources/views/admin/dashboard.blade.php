<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@700;800;900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
        .no-line-card {
            border: none !important;
        }
        /* Styles pour le tableau des prestataires en attente */
        .providers-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }
        .providers-table th {
            text-align: left;
            padding: 1rem 0.75rem 0.75rem 0.75rem;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #584237;
            border-bottom: 1px solid #e0c0b1;
        }
        .providers-table td {
            padding: 1rem 0.75rem;
            border-bottom: 1px solid #e5eeff;
            font-size: 0.875rem;
            vertical-align: middle;
        }
        .providers-table tr:last-child td {
            border-bottom: none;
        }
        .badge-pending {
            background-color: #ffdad6;
            color: #ba1a1a;
            border-radius: 9999px;
            padding: 0.25rem 0.75rem;
            font-size: 0.7rem;
            font-weight: 700;
            display: inline-block;
        }
        .btn-approve {
            background-color: #f97316;
            color: white;
            border-radius: 0.5rem;
            padding: 0.35rem 1rem;
            font-size: 0.7rem;
            font-weight: 700;
            transition: all 0.2s;
            cursor: pointer;
            border: none;
            display: inline-block;
        }
        .btn-approve:hover {
            background-color: #9d4300;
        }
        /* Style pour les cartes utilisateurs (vue alternative) */
        .user-card {
            background: white;
            border-radius: 1rem;
            padding: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
            transition: all 0.2s;
            border: 1px solid #e5eeff;
        }
        .user-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface antialiased flex overflow-hidden">

<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-screen w-72 bg-slate-50 dark:bg-slate-950 flex flex-col h-full py-8 z-50">
    <div class="px-8 mb-12">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-primary-container rounded-xl flex items-center justify-center shadow-lg shadow-primary-container/20">
                <span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">solar_power</span>
            </div>
            <div>
                <h1 class="font-headline font-extrabold text-xl text-slate-900 dark:text-white leading-tight">SolarConnect</h1>
                <p class="font-body text-xs text-on-surface-variant/70 tracking-wide uppercase">Admin Console</p>
            </div>
        </div>
    </div>
    <nav class="flex-grow space-y-2">
        <a class="flex items-center text-orange-600 dark:text-orange-400 bg-white dark:bg-slate-900 rounded-l-full ml-4 pl-6 py-3 shadow-sm translate-x-1 hover:translate-x-2 transition-transform font-headline font-bold text-lg" href="#">
            <span class="material-symbols-outlined mr-4" data-icon="dashboard">dashboard</span>
            <span>Dashboard</span>
        </a>
        <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2 transition-transform font-headline font-bold text-lg" href="#">
            <span class="material-symbols-outlined mr-4" data-icon="group">group</span>
            <span>Users</span>
        </a>
        <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2 transition-transform font-headline font-bold text-lg" href="#">
            <span class="material-symbols-outlined mr-4" data-icon="category">category</span>
            <span>Categories</span>
        </a>
        <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2 transition-transform font-headline font-bold text-lg" href="#">
            <span class="material-symbols-outlined mr-4" data-icon="rate_review">rate_review</span>
            <span>Reviews</span>
        </a>
        <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2 transition-transform font-headline font-bold text-lg" href="#">
            <span class="material-symbols-outlined mr-4" data-icon="query_stats">query_stats</span>
            <span>Statistics</span>
        </a>
    </nav>
    <div class="px-8 mt-auto pt-8 border-t border-slate-200/10">
        <a class="flex items-center text-slate-500 dark:text-slate-400 px-2 py-3 hover:text-error transition-all font-headline font-bold text-lg" href="#">
            <span class="material-symbols-outlined mr-4" data-icon="logout">logout</span>
            <span>Logout</span>
        </a>
    </div>
</aside>

<main class="ml-72 flex-1 h-screen overflow-y-auto bg-surface">
    <!-- TopNavBar -->
    <header class="sticky top-0 z-40 w-full bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl flex justify-between items-center px-8 h-16 w-full shadow-[0_12px_32px_rgba(18,28,40,0.06)]">
        <div class="flex items-center bg-surface-container-low px-4 py-2 rounded-full w-96">
            <span class="material-symbols-outlined text-on-surface-variant mr-2 text-sm" data-icon="search">search</span>
            <input class="bg-transparent border-none focus:ring-0 text-sm font-['Inter'] w-full placeholder:text-slate-400" placeholder="Rechercher des données..." type="text"/>
        </div>
        <div class="flex items-center gap-6">
            <button class="relative text-slate-500 hover:text-orange-600 transition-colors">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full border-2 border-white"></span>
            </button>
            <button class="text-slate-500 hover:text-orange-600 transition-colors">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                <div class="text-right hidden sm:block">
                    <p class="text-xs font-bold text-on-surface leading-none">Jean-Paul Dupont</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter mt-1">Administrateur</p>
                </div>
                <img alt="Administrator Avatar" class="w-9 h-9 rounded-full object-cover ring-2 ring-orange-50" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAX_wCq5p9Dzx_JiOUhyTLmDvq0-E975VeV2fgJcrciaT84tx-eVTqmmf0YLo_6bIRN1Zzlbe-DTJ_j6nOo2VUESi0R8B3yHPrt4xHO5xF71I-TSfYOYrbPkgl_yls_u3khpiQD60UnzZ8s6hJV94Ey2m3uhxYjSK1RaXVlm9X1VNciXsX6wS73UUtF-1D6L5jz2sCAqQ1XGH8Uyqtsm_hMgkwtPyreNYckIYnrIRKyqaIkq1C6TOUlAHNouNh2LAR_9cvFFgKl9aM"/>
            </div>
        </div>
    </header>

    <div class="p-8 space-y-8">
        <!-- Header Section -->
        <section class="flex justify-between items-end">
            <div>
                <h2 class="font-headline text-3xl font-black tracking-tight text-on-surface">Vue d'ensemble</h2>
                <p class="text-on-surface-variant mt-1">Bienvenue dans votre console de gestion énergétique.</p>
            </div>
            <div class="flex gap-3">
                <button class="bg-surface-container-high px-6 py-2.5 rounded-xl text-primary font-semibold text-sm hover:bg-orange-50 transition-colors">Exporter</button>
               
            </div>
        </section>

        <!-- KPI Cards -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] hover:shadow-lg transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-orange-50 rounded-lg text-primary group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" data-icon="payments" style="font-variation-settings: 'FILL' 1;">payments</span>
                    </div>
                    <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-md">+12.5%</span>
                </div>
                <p class="text-sm font-medium text-on-surface-variant">Revenu Total</p>
                <h3 class="font-headline text-2xl font-black text-on-surface mt-1">45,280 €</h3>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] hover:shadow-lg transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-blue-50 rounded-lg text-blue-600 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" data-icon="person_add" style="font-variation-settings: 'FILL' 1;">person_add</span>
                    </div>
                    <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-md">+8.2%</span>
                </div>
                <p class="text-sm font-medium text-on-surface-variant">Nouveaux Utilisateurs</p>
                <h3 class="font-headline text-2xl font-black text-on-surface mt-1">1,204</h3>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] hover:shadow-lg transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-tertiary-container/20 rounded-lg text-tertiary group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" data-icon="engineering" style="font-variation-settings: 'FILL' 1;">engineering</span>
                    </div>
                    <span class="text-xs font-bold text-on-surface-variant bg-slate-100 px-2 py-1 rounded-md">Stable</span>
                </div>
                <p class="text-sm font-medium text-on-surface-variant">Prestataires Actifs</p>
                <h3 class="font-headline text-2xl font-black text-on-surface mt-1">86</h3>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] hover:shadow-lg transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-purple-50 rounded-lg text-purple-600 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" data-icon="ads_click" style="font-variation-settings: 'FILL' 1;">ads_click</span>
                    </div>
                    <span class="text-xs font-bold text-error bg-error-container px-2 py-1 rounded-md">-1.4%</span>
                </div>
                <p class="text-sm font-medium text-on-surface-variant">Taux de Conversion</p>
                <h3 class="font-headline text-2xl font-black text-on-surface mt-1">4.2%</h3>
            </div>
        </section>

        <!-- Tableau des prestataires en attente d'approbation (affichage statique HTML/CSS uniquement) -->
        <section class="grid grid-cols-1 gap-8">
            <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)]">
                <div class="flex justify-between items-center mb-6 flex-wrap gap-4">
                    <div>
                        <h3 class="font-headline text-xl font-extrabold text-on-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">pending_actions</span>
                            Nouvelles inscriptions prestataires
                        </h3>
                        <p class="text-sm text-on-surface-variant mt-1">Demandes en attente de validation par l'administrateur</p>
                    </div>
                    <div class="bg-error-container/30 px-3 py-1 rounded-full">
                        <span class="text-xs font-black text-error">⚠️ 5 demandes en attente</span>
                    </div>
                </div>

                <!-- Version tableau (affichage principal) - DONNÉES STATIQUES HTML SANS JS -->
                <div class="overflow-x-auto">
                    <table class="providers-table">
                        <thead>
                            <tr>
                                <th>Prestataire</th>
                                <th>ville</th>
                                <th>Date d'inscription</th>
                                <th>documents</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Prestataire 1 -->

                            @foreach ($prestataires as $prestataire )
                                
                            
                            
                            <tr>
                                <td class="font-semibold text-on-surface">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary text-sm">business</span>
                                        </div>
                                     @if ($prestataire->prestataire->company_name)
                                     {{ $prestataire->prestataire->company_name }}
                                         
                                     @endif
                                     @if (!$prestataire->prestataire->company_name)
                                     {{ $prestataire->first_name }}
                                         
                                     @endif
                                    </div>
                                </td>
                                <td class="text-on-surface-variant">{{$prestataire->ville}}</td>
                                <td class="text-on-surface-variant">{{$prestataire->created_at}}</td>
                                <td>
                                    <a href="{{ route('admin.showCin',$prestataire->id)}}" target="_blank" class="badge-pending" disabled style="opacity:0.6; cursor:not-allowed;" title="Fonctionnalité disponible avec JavaScript"><span class="material-symbols-outlined">picture_as_pdf</span></a>
                                    <a href="{{ route('admin.showCertificat',$prestataire->id)}}" target="_blank" class="badge-pending" disabled style="opacity:0.6; cursor:not-allowed;" title="Fonctionnalité disponible avec JavaScript"><span class="material-symbols-outlined">badge</span></a>
                                </td>
                                <td>
                                <form action="{{ route('admin.approuver',$prestataire->id)}}" method="POST">
                                    @csrf
                                <button type="submit" class="btn-approve"  style=" cursor:pointer;" title="Fonctionnalité disponible avec JavaScript">Approuver</button>
                                </form>
                                </td>
                            </tr>
                           
                           @endforeach
                           
                        </tbody>
                    </table>
                </div>

                <!-- Note informatif pour l'admin (sans JS) -->
                <div class="mt-6 pt-4 border-t border-outline-variant/30 text-xs text-on-surface-variant flex items-center justify-between">
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">info</span>
                        <span>Affichage statique des prestataires en attente. Version démo sans JavaScript.</span>
                    </div>
                    <div class="bg-surface-container-high px-3 py-1 rounded-full">
                        <span class="font-bold text-primary">5</span> <span>en attente</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section supplémentaire : Liste des utilisateurs (clients) - Affichage style cartes pour enrichir la vue utilisateur -->
        <section class="grid grid-cols-1 gap-6">
            <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)]">
                <div class="flex items-center gap-2 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">group</span>
                    <h3 class="font-headline text-xl font-extrabold text-on-surface">Utilisateurs récents (clients)</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Carte utilisateur 1 -->
                      @foreach ($users as $user )
                          
                      <div class="user-card">
                          <div class="flex items-center gap-3 mb-3">
                              <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                  <span class="material-symbols-outlined text-blue-600">person</span>
                                </div>
                                <div>
                                    <p class="font-bold text-on-surface">{{$user->first_name." ".$user->last_name}}</p>
                                    <p class="text-xs text-on-surface-variant">{{$user->email}}</p>
                                </div>
                            </div>
                            <div class="flex justify-between text-xs">
                                <span class="text-on-surface-variant">{{$user->created_at}}</span>
                               
                                @if($user->role->value === "client")
                                    
                                <span class="text-green-600 bg-green-50 px-2 py-0.5 rounded-full">client</span>
                                @endif
                                @if($user->role->value === "prestataire")
                                    
                                <span class="text-orange-600 bg-green-50 px-2 py-0.5 rounded-full">prestatire</span>
                                @endif
                            </div>
                        </div>
                        @endforeach

                    
                  
                </div>
                <div class="mt-6 text-center">
                    <button class="text-primary font-bold text-sm hover:underline">Voir tous les utilisateurs →</button>
                </div>
            </div>
        </section>

        <!-- Bottom Section - Highlights (inchangé pour garder le design cohérent) -->
      
    </div>
</main>
</body>
</html>