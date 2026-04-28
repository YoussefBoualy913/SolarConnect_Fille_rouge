<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
     <title>@yield('title')</title>
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
    @yield('vite')
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

        <x-nav-link href="{{ route('admin.dashboard') }}" active="admin.dashboard">
           <x-span-link icon="dashboard">
              dashboard
           </x-span-link>
           <x-span-link-name >
              Dashboard
           </x-span-link-name>
        </x-nav-link>
        
         <x-nav-link href="{{ route('admin.users.index') }}" active="admin.users.index">
           <x-span-link icon="group">
              group
           </x-span-link>
           <x-span-link-name >
              Users
           </x-span-link-name>
        </x-nav-link>
       
         <x-nav-link href="{{ route('admin.categories.index') }}" active="admin.categories.index">
           <x-span-link icon="category">
              category
           </x-span-link>
           <x-span-link-name >
              Categories
           </x-span-link-name>
        </x-nav-link>
      
        <a class="flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2 transition-transform font-headline font-bold text-lg" href="#">
            <span class="material-symbols-outlined mr-4" data-icon="rate_review">rate_review</span>
            <span>Reviews</span>
        </a>
        
    </nav>
    <div class="px-8 mt-auto pt-8 border-t border-slate-200/10">

        <a class="flex items-center text-slate-500 dark:text-slate-400 px-2 py-3 hover:text-error transition-all font-headline font-bold text-lg" href="{{ route('logout') }}">
            <span class="material-symbols-outlined mr-4" data-icon="logout">logout</span>
            <span>Logout</span>
        </a>
    </div>
</aside>

<main class="ml-72 flex-1 h-screen overflow-y-auto bg-surface">
    <!-- TopNavBar -->
    <header class="sticky top-0 z-40 w-full bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl flex justify-end items-center px-8 h-16 w-full shadow-[0_12px_32px_rgba(18,28,40,0.06)]">
      
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
                    <p class="text-xs font-bold text-on-surface leading-none">{{ auth()->user()->first_name." ". auth()->user()->last_name}}</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter mt-1">Administrateur</p>
                </div>
                <img alt="Administrator Avatar" class="w-9 h-9 rounded-full object-cover ring-2 ring-orange-50" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFcenML2eezicFEoPDoRTbrMZBDNAyM1cSi4Sip3KH9fJq0sSzk98WboCvK67CUiT8MPpcIg1uDw2dig8Tj4HgKZnRWQxx22gHTMKQDOl2V8xBr8dz_TY8A-TDSXva9ZJZPzsbfNm_VuN_Yw_eoPjlBGvT3y_otQ0SYvKM-8uAgIPZZfP8_LyFRdX5lZe6rWjGFeWjKW0NeQvDxwBHEMJtlGJW6QTno7mFC0PUPY5tp-QQ_hv7KmsJ_e6awM3eN_HYiQVpcGPeUpM"/>
            </div>
        </div>
    </header>
     @yield('content')

   
</main>
@yield('model')
</body>
</html>