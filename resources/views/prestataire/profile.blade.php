<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Gestion du Profil Professionnel - SolarGrid Pro</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "primary-fixed-dim": "#ffb690",
                        "secondary-container": "#d6e0f3",
                        "on-primary-container": "#582200",
                        "inverse-surface": "#27313e",
                        "on-secondary-fixed": "#121c2a",
                        "on-secondary-container": "#596373",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "surface-bright": "#f8f9ff",
                        "on-primary-fixed": "#341100",
                        "secondary-fixed-dim": "#bdc7d9",
                        "surface-variant": "#d9e3f4",
                        "primary-fixed": "#ffdbca",
                        "on-tertiary": "#ffffff",
                        "surface": "#f8f9ff",
                        "on-primary": "#ffffff",
                        "secondary-fixed": "#d9e3f6",
                        "tertiary-container": "#cea700",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#e0c0b1",
                        "inverse-on-surface": "#eaf1ff",
                        "background": "#f8f9ff",
                        "inverse-primary": "#ffb690",
                        "on-surface": "#121c28",
                        "surface-container-high": "#dfe9fa",
                        "surface-container-low": "#eef4ff",
                        "on-surface-variant": "#584237",
                        "primary": "#9d4300",
                        "on-primary-fixed-variant": "#783200",
                        "on-secondary-fixed-variant": "#3d4756",
                        "outline": "#8c7164",
                        "surface-dim": "#d1dbec",
                        "tertiary": "#735c00",
                        "on-error": "#ffffff",
                        "on-background": "#121c28",
                        "secondary": "#555f6f",
                        "surface-container": "#e5eeff",
                        "surface-tint": "#9d4300",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed-variant": "#574500",
                        "on-tertiary-container": "#4e3e00",
                        "surface-container-highest": "#d9e3f4",
                        "tertiary-fixed-dim": "#eec200",
                        "tertiary-fixed": "#ffe083",
                        "on-tertiary-fixed": "#231b00",
                        "error-container": "#ffdad6",
                        "primary-container": "#f97316"
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
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-headline {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .tonal-shift {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- TopNavBar -->
    <header
        class="w-full sticky top-0 z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm dark:shadow-none h-16 flex justify-between items-center px-6">
        <div class="flex items-center gap-8">
            <span class="text-xl font-black text-slate-900 dark:text-white font-manrope tracking-tight">SolarGrid
                Pro</span>
            <div class="hidden md:flex gap-6 items-center">
                <nav class="flex gap-6">
                    <a class="text-slate-500 dark:text-slate-400 hover:text-orange-600 transition-colors font-medium text-sm"
                        href="#">Tableau de bord</a>
                    <a class="text-slate-500 dark:text-slate-400 hover:text-orange-600 transition-colors font-medium text-sm"
                        href="#">Services</a>
                    <a class="text-orange-600 dark:text-orange-400 font-semibold text-sm" href="#">Profil</a>
                </nav>
            </div>
        </div>
        <div class="flex items-center gap-4">
                <button class="p-2 text-slate-500 hover:bg-slate-100 rounded-full transition-colors relative">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-orange-600 rounded-full"></span>
                </button>
                <button class="p-2 text-slate-500 hover:bg-slate-100 rounded-full transition-colors">
                    <span class="material-symbols-outlined" data-icon="help">help</span>
                </button>
                <div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
                <div class="flex items-center gap-3 pl-2">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-slate-900">{{$user->first_name}}</p>
                        <p class="text-[10px] text-slate-500">{{$user->email}}</p>
                    </div>
                     <div class="flex -space-x-2">
                                  
                                         <div
                                        class="w-8 h-8 rounded-full bg-gradient-to-br from-amber-600 to-amber-400 flex items-center justify-center text-white text-xs font-bold border-2 border-white">
                                        {{$user->initials}}</div>
                                        
                                       
                </div>
            </div>
    </header>
    <div class="flex min-h-screen">
        <!-- SideNavBar -->
        <aside
            class="hidden md:flex flex-col h-screen w-64 fixed left-0 top-16 bg-slate-50 dark:bg-slate-950 py-6 px-4 gap-2 z-40">
            <div class="mb-6 px-2">
                <h2 class="text-lg font-bold text-slate-900 dark:text-white font-manrope">Solar Provider</h2>
                <p class="text-xs text-slate-500 uppercase tracking-widest font-bold">Premium Tier</p>
            </div>
            <nav class="flex flex-col gap-1">
                <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="bolt">bolt</span>
                    Services
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                    Orders
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 hover:translate-x-1 transition-all font-manrope font-medium text-sm"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="rate_review">rate_review</span>
                    Reviews
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-orange-700 dark:text-orange-300 bg-white dark:bg-slate-900 rounded-lg shadow-sm font-manrope font-medium text-sm"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="person">person</span>
                    Profile
                </a>
              
            </nav>
            <div class="mt-[66%] flex flex-col gap-1">
               
                <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 transition-all font-manrope font-medium text-sm"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="logout">logout</span>
                    Logout
                </a>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 md:ml-64 p-6 lg:p-10 bg-surface">
            <header class="mb-8">
                <h1 class="text-3xl lg:text-4xl font-extrabold text-on-surface font-headline tracking-tight mb-2">
                    Gestion du Profil Professionnel</h1>
                <p class="text-on-surface-variant max-w-2xl leading-relaxed">Gérez l'identité de votre entreprise, vos
                    accréditations et définissez votre zone opérationnelle pour optimiser vos prospects.</p>
            </header>
            <!-- Tabs Section -->
            <div class="flex flex-wrap gap-4 mb-8 bg-surface-container-low p-1.5 rounded-xl w-fit">
                <button
                    class="px-6 py-2.5 bg-surface-container-lowest text-primary font-semibold rounded-lg shadow-sm text-sm transition-all">Informations
                    Générales</button>
                <button
                    class="px-6 py-2.5 text-on-surface-variant hover:text-on-surface font-medium text-sm transition-all">Certifications</button>
              
            </div>
            <!-- Bento Grid Layout for Management -->
                <!-- Main Form Column -->
                <form  action="{{ route('prestataire.update') }}" method="POST"
                class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                @csrf
                @method('PATCH')
                <div class="lg:col-span-8 space-y-8">
                    <!-- General Info Card -->
                    <section class="bg-surface-container-lowest rounded-xl p-8 transition-all">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary" data-icon="business">business</span>
                            <h3 class="text-xl font-bold font-headline text-on-surface">Informations sur l'entreprise
                            </h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2 flex items-center gap-6 mb-4">
                                
                                <div class="flex-1">
                                    <label
                                        class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Nom
                                        de l'entreprise</label>
                                    <input
                                        class="w-full bg-surface-container-low border-none rounded-lg focus:ring-1 focus:ring-primary/20 text-on-surface font-medium px-4 py-3"
                                        type="text" name="company_name" value="{{ $user->prestataire->company_name ?? '' }}" />
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <label
                                    class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Bio
                                    de l'entreprise</label>
                                <textarea
                                    class="w-full bg-surface-container-low border-none rounded-lg focus:ring-1 focus:ring-primary/20 text-on-surface font-medium px-4 py-3 leading-relaxed"
                                    rows="4">Spécialiste de l'installation photovoltaïque résidentielle et tertiaire en région Occitanie depuis 12 ans. Nous nous engageons pour une énergie durable et locale.</textarea>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Contact
                                    Téléphone</label>
                                <input
                                    class="w-full bg-surface-container-low border-none rounded-lg focus:ring-1 focus:ring-primary/20 text-on-surface font-medium px-4 py-3"
                                    type="tel" name="phone" value="{{ $user->phone }}" />
                            </div>
                          
                        </div>
                    </section>
                    <!-- Documents Section -->
                    <section class="bg-surface-container-lowest rounded-xl p-8 transition-all">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary"
                                    data-icon="description">description</span>
                                <h3 class="text-xl font-bold font-headline text-on-surface">Documents Officiels</h3>
                            </div>
                            <span
                                class="text-xs font-bold text-primary bg-primary-container/10 px-3 py-1 rounded-full">3
                                Documents Vérifiés</span>
                        </div>
                        <div class="space-y-4">
                            <!-- Doc Item -->
                            <div
                                class="flex items-center justify-between p-4 bg-surface-container-low rounded-xl group hover:bg-surface-container transition-all">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="h-10 w-10 rounded-lg bg-white flex items-center justify-center text-primary shadow-sm">
                                        <span class="material-symbols-outlined"
                                            data-icon="picture_as_pdf">picture_as_pdf</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-on-surface">CIN
                                        </p>
                                        <p class="text-xs text-on-surface-variant">Expire le 12/05/2025</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span
                                        class="flex items-center gap-1 text-[10px] font-black text-tertiary-container bg-tertiary-container/10 px-2 py-1 rounded">
                                        <span class="material-symbols-outlined text-sm" data-icon="check_circle"
                                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                        UPLOADED
                                    </span>
                                    <button
                                        class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors"
                                        data-icon="more_vert">more_vert</button>
                                </div>
                            </div>
                            <!-- Doc Item -->
                            <div
                                class="flex items-center justify-between p-4 bg-surface-container-low rounded-xl group hover:bg-surface-container transition-all">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="h-10 w-10 rounded-lg bg-white flex items-center justify-center text-primary shadow-sm">
                                        <span class="material-symbols-outlined" data-icon="verified">verified</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-on-surface">Certification </p>
                                        <p class="text-xs text-on-surface-variant">Mis à jour il y a 2 mois</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span
                                        class="flex items-center gap-1 text-[10px] font-black text-tertiary-container bg-tertiary-container/10 px-2 py-1 rounded">
                                        <span class="material-symbols-outlined text-sm" data-icon="check_circle"
                                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                        UPLOADED
                                    </span>
                                    <button
                                        class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors"
                                        data-icon="more_vert">more_vert</button>
                                </div>
                            </div>
                            <!-- Upload Button -->
                            <button
                                class="w-full py-4 border-2 border-dashed border-outline-variant/30 rounded-xl text-on-surface-variant font-bold text-sm hover:border-primary/50 hover:text-primary transition-all flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined" data-icon="add_circle">add_circle</span>
                                Ajouter un document PDF
                            </button>
                        </div>
                    </section>
                </div>
                <!-- Secondary Column (Map & Stats) -->
                <div class="lg:col-span-4 space-y-8">
                    
                    <!-- Save Action -->
                     <section class="bg-surface-container-lowest rounded-xl p-8 transition-all">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined" data-icon="person">person</span>
                            <h3 class="text-xl font-bold font-headline text-on-surface">Informations personnelles
                            </h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2 flex items-center gap-6 mb-4">
                               
                                <div class="flex-1">
                                    <label
                                        class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Nom
                                     </label>
                                    <input
                                        class="w-full bg-surface-container-low border-none rounded-lg focus:ring-1 focus:ring-primary/20 text-on-surface font-medium px-4 py-3"
                                        type="text" name="first_name" value="{{ $user->first_name }}" />
                                </div>

                            </div>
                             <div class="md:col-span-2 flex items-center gap-6 mb-4">
                               
                                <div class="flex-1">
                                    <label
                                        class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">prénom
                                     </label>
                                    <input
                                        class="w-full bg-surface-container-low border-none rounded-lg focus:ring-1 focus:ring-primary/20 text-on-surface font-medium px-4 py-3"
                                        type="text" name="last_name" value="{{ $user->last_name }}" />
                                </div>

                            </div>
                             <div class="md:col-span-2 flex items-center gap-6 mb-4">
                                 
                                 <div>
                                     <label
                                     class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Email
                                     de Contact</label>
                                     <input
                                     class="w-full bg-surface-container-low border-none rounded-lg focus:ring-1 focus:ring-primary/20 text-on-surface font-medium px-4 py-3"
                                     type="email" name="email" value="{{ $user->email }}" />
                                    </div>
                                    
                                </div>
                                <div class="md:col-span-2 flex items-center gap-6 mb-4">
                                 
                                 <div>
                                     <label
                                     class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">ville
                                     </label>
                                     <input
                                     class="w-full bg-surface-container-low border-none rounded-lg focus:ring-1 focus:ring-primary/20 text-on-surface font-medium px-4 py-3"
                                     type="text" name="ville " value="{{ $user->ville }}" />
                                    </div>
                                    
                                </div>
                                
                                
                                
                         
                        </div>
                    </section>
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-inverse-surface text-white font-bold py-4 rounded-xl shadow-xl hover:scale-[1.02] active:scale-95 transition-all flex items-center justify-center gap-3">
                            <span class="material-symbols-outlined" data-icon="save">save</span>
                            Enregistrer les modifications
                        </button>
                    </div>
                </div>
                </form>
            
        </main>
    </div>
    <!-- Mobile Bottom Navigation -->
    <nav
        class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-white/90 backdrop-blur-md flex items-center justify-around px-4 z-50 shadow-[0_-2px_10px_rgba(0,0,0,0.05)]">
        <button class="flex flex-col items-center gap-1 text-slate-400">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span class="text-[10px] font-bold uppercase">Tableau</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-slate-400">
            <span class="material-symbols-outlined" data-icon="bolt">bolt</span>
            <span class="text-[10px] font-bold uppercase">Services</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-orange-600">
            <span class="material-symbols-outlined" data-icon="person"
                style="font-variation-settings: 'FILL' 1;">person</span>
            <span class="text-[10px] font-bold uppercase">Profil</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-slate-400">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
            <span class="text-[10px] font-bold uppercase">Réglages</span>
        </button>
    </nav>
</body>

</html>
