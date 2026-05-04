<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Profil Utilisateur - SolarConnect</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f8f9ff",
                        "inverse-surface": "#27313e",
                        "tertiary-fixed": "#ffe083",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "inverse-primary": "#ffb690",
                        "on-secondary-fixed": "#121c2a",
                        "surface-variant": "#d9e3f4",
                        "tertiary": "#735c00",
                        "surface-container": "#e5eeff",
                        "surface-bright": "#f8f9ff",
                        "on-tertiary-container": "#4e3e00",
                        "secondary-fixed-dim": "#bdc7d9",
                        "outline-variant": "#e0c0b1",
                        "secondary": "#555f6f",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#cea700",
                        "primary-fixed": "#ffdbca",
                        "primary": "#9d4300",
                        "inverse-on-surface": "#eaf1ff",
                        "background": "#f8f9ff",
                        "secondary-fixed": "#d9e3f6",
                        "surface-container-high": "#dfe9fa",
                        "on-secondary-fixed-variant": "#3d4756",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed": "#341100",
                        "on-tertiary": "#ffffff",
                        "surface-container-highest": "#d9e3f4",
                        "on-tertiary-fixed-variant": "#574500",
                        "on-tertiary-fixed": "#231b00",
                        "surface-container-low": "#eef4ff",
                        "on-error-container": "#93000a",
                        "on-primary-container": "#582200",
                        "on-surface": "#121c28",
                        "primary-container": "#f97316",
                        "surface-dim": "#d1dbec",
                        "surface-tint": "#9d4300",
                        "on-background": "#121c28",
                        "on-primary-fixed-variant": "#783200",
                        "primary-fixed-dim": "#ffb690",
                        "on-secondary-container": "#596373",
                        "outline": "#8c7164",
                        "tertiary-fixed-dim": "#eec200",
                        "error": "#ba1a1a",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#d6e0f3",
                        "on-surface-variant": "#584237"
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
        }

        .glass-header {
            background: rgba(248, 249, 255, 0.8);
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- Top Navigation Bar -->
    <header
        class="fixed top-0 w-full z-50 glass-header shadow-[0_12px_32px_rgba(18,28,40,0.06)] font-['Manrope'] antialiased tracking-tight">
        <div class="flex justify-between items-center px-6 py-3 w-full">
            <div class="flex items-center gap-8">
                <span class="text-2xl font-black text-orange-600">SolarConnect</span>
                <nav class="hidden md:flex gap-6">
                    <a class="text-slate-500 hover:bg-slate-100 px-3 py-1 rounded transition-colors duration-200"
                        href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <a class="text-slate-500 hover:bg-slate-100 px-3 py-1 rounded transition-colors duration-200"
                        href="{{ route('admin.users.index') }}">Users</a>
                    <a class="text-slate-500 hover:bg-slate-100 px-3 py-1 rounded transition-colors duration-200"
                        href="{{ route('admin.categories.index') }}">Categories</a>
                    <a class="text-orange-600 font-bold border-b-2 border-orange-600 px-3 py-1"
                        href="{{ route('client.profile.show') }}">Profil</a>
                </nav>
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
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFcenML2eezicFEoPDoRTbrMZBDNAyM1cSi4Sip3KH9fJq0sSzk98WboCvK67CUiT8MPpcIg1uDw2dig8Tj4HgKZnRWQxx22gHTMKQDOl2V8xBr8dz_TY8A-TDSXva9ZJZPzsbfNm_VuN_Yw_eoPjlBGvT3y_otQ0SYvKM-8uAgIPZZfP8_LyFRdX5lZe6rWjGFeWjKW0NeQvDxwBHEMJtlGJW6QTno7mFC0PUPY5tp-QQ_hv7KmsJ_e6awM3eN_HYiQVpcGPeUpM"/>
            </div>
        </div>
        </div>
    </header>
    <main class="pt-24 pb-12 px-4 md:px-8 max-w-7xl mx-auto">
        <!-- Profile Header Section -->
        <section class="mb-10">
            <div class="flex flex-col md:flex-row items-start md:items-end gap-6 mb-8">
                <div class="relative">
                    <div
                        class="w-32 h-32 rounded-xl overflow-hidden shadow-lg border-4 border-surface-container-lowest">
                        <img alt="Profile"
                            data-alt="professional headshot of a smiling man with neat hair and a light blue shirt against a neutral studio background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFcenML2eezicFEoPDoRTbrMZBDNAyM1cSi4Sip3KH9fJq0sSzk98WboCvK67CUiT8MPpcIg1uDw2dig8Tj4HgKZnRWQxx22gHTMKQDOl2V8xBr8dz_TY8A-TDSXva9ZJZPzsbfNm_VuN_Yw_eoPjlBGvT3y_otQ0SYvKM-8uAgIPZZfP8_LyFRdX5lZe6rWjGFeWjKW0NeQvDxwBHEMJtlGJW6QTno7mFC0PUPY5tp-QQ_hv7KmsJ_e6awM3eN_HYiQVpcGPeUpM"/>
                    </div>
                   
                </div>
                <div class="flex-1">
                    <h1 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface mb-1">{{$user->first_name}}</h1>
                    <p class="text-on-surface-variant font-medium">Admin • Membre depuis Janvier {{$user->created_at->format('Y')}}</p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="px-6 py-2.5 rounded-xl bg-surface-container-high text-primary font-bold transition-all active:scale-95 duration-200">
                        Exporter les données
                    </button>
                </div>
            </div>
            <!-- Tab Navigation -->
            <div class="flex gap-8  border-surface-variant/30">
                <button class="pb-4 text-primary font-bold  border-primary transition-colors">Informations
                    personnelles</button>
               
            </div>
        </section>
        <!-- Bento Grid Layout for Content -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Left Column: Personal Info Form -->
            <div class="lg:col-span-8 space-y-8">
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)]">
                    <h2 class="text-xl font-bold font-headline mb-6">Détails du compte</h2>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-6" action="{{ route('admin.profile.update',$user) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Prénom</label>
                            <input
                                class="w-full px-4 py-3 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all outline-none"
                                name="first_name" type="text" value="{{ $user->first_name }}" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Nom</label>
                            <input
                                class="w-full px-4 py-3 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all outline-none"
                                name="last_name"  type="text" value="{{$user->last_name}}" />
                        </div>
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Adresse email</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-xl">mail</span>
                                <input
                                    class="w-full pl-12 pr-4 py-3 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all outline-none"
                                     name="email" type="email" value="{{$user->email}}" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Téléphone</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-xl">call</span>
                                <input
                                    class="w-full pl-12 pr-4 py-3 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all outline-none"
                                    name="phone"   type="tel" value="{{$user->phone}}" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Ville</label>
                            <input
                                class="w-full px-4 py-3 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all outline-none"
                                name="ville"  type="text" value="{{$user->ville}}" />
                        </div>
                        <div class="mt-10 flex justify-end">
                            <button type="submit"
                            class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-8 py-3 rounded-xl font-bold shadow-lg active:scale-95 transition-all">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
                </div>
               
            </div>
            <!-- Right Column: Sidebar / Summary Cards -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Energy Status Card -->
                <div class="bg-inverse-surface text-on-primary p-6 rounded-xl shadow-xl overflow-hidden relative">
                    <div class="relative z-10">
                        <span
                            class="inline-flex items-center gap-1 bg-tertiary-container text-on-tertiary-container px-3 py-1 rounded-full text-xs font-black uppercase tracking-wider mb-4">
                            <span class="material-symbols-outlined text-xs"
                                style="font-variation-settings: 'FILL' 1;">bolt</span>
                            Statut Énergie
                        </span>
                        <h3 class="text-2xl font-bold font-headline mb-2">Optimisation Active</h3>
                        <p class="text-inverse-on-surface/70 text-sm mb-6">Votre système solaire a économisé 245kg de
                            CO2 ce mois-ci.</p>
                        <div class="flex items-center gap-4">
                            <div class="flex -space-x-2">
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-inverse-surface bg-primary flex items-center justify-center text-[10px] font-bold">
                                    12kW</div>
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-inverse-surface bg-tertiary flex items-center justify-center text-[10px] font-bold">
                                    85%</div>
                            </div>
                            <span class="text-xs font-medium text-inverse-on-surface/50">Performance du système</span>
                        </div>
                    </div>
                    <!-- Decorative background element -->
                    <div class="absolute -right-8 -bottom-8 w-40 h-40 bg-primary/20 rounded-full blur-3xl"></div>
                </div>
                <!-- Security Quick Access -->
                <div class="bg-surface-container-high p-6 rounded-xl">
                    <h3 class="font-bold text-on-surface mb-4">Sécurité du compte</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-on-surface-variant">lock_reset</span>
                                <span class="text-sm font-medium">Mot de passe</span>
                            </div>
                            <button class="text-xs font-bold text-primary">Changer</button>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-on-surface-variant">verified_user</span>
                                <span class="text-sm font-medium">2FA (Double facteur)</span>
                            </div>
                            <div class="w-8 h-4 bg-primary rounded-full relative">
                                <div class="absolute right-0.5 top-0.5 w-3 h-3 bg-white rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-on-surface-variant">devices</span>
                                <span class="text-sm font-medium">Sessions actives</span>
                            </div>
                            <span class="text-xs font-bold text-on-surface-variant">3 appareils</span>
                        </div>
                    </div>
                </div>
                <!-- Account Support -->
               
            </div>
        </div>
    </main>
    <!-- Mobile Bottom Navigation (Visible only on small screens) -->
    <footer
        class="md:hidden fixed bottom-0 left-0 w-full bg-white/90 backdrop-blur-lg border-t border-surface-variant/20 px-4 py-2 z-50">
        <div class="flex justify-around items-center">
            <button class="flex flex-col items-center gap-1 p-2 text-slate-500">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="text-[10px] font-medium">Dashboard</span>
            </button>
            <button class="flex flex-col items-center gap-1 p-2 text-slate-500">
                <span class="material-symbols-outlined">search</span>
                <span class="text-[10px] font-medium">Explorer</span>
            </button>
            <button class="flex flex-col items-center gap-1 p-2 text-slate-500">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="text-[10px] font-medium">Commandes</span>
            </button>
            <button class="flex flex-col items-center gap-1 p-2 text-orange-600">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">person</span>
                <span class="text-[10px] font-bold">Profil</span>
            </button>
        </div>
    </footer>
</body>

</html>
