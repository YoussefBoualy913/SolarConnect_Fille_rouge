<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tableau de bord Prestataire - SolarGrid Pro</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@700;800;900&amp;display=swap"
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
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .tonal-shift {
            transition: background-color 0.3s ease;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
        }

        .ambient-shadow {
            shadow: 0 12px 32px rgba(18, 28, 40, 0.06);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar Shell -->
    <aside
        class="h-screen w-64 fixed left-0 top-0 bg-slate-50 border-r-0 flex flex-col py-6 px-4 gap-2 z-40 hidden md:flex">
        <div class="mb-8 px-2">
            <h1 class="text-lg font-bold text-slate-900 font-headline">Solar Provider</h1>
            <p class="text-xs text-slate-500">Premium Tier</p>
        </div>
        <nav class="flex-1 flex flex-col gap-1">
            <!-- Dashboard Active -->
            <a class="text-orange-700 bg-white rounded-lg shadow-sm flex items-center gap-3 px-3 py-2.5 transition-all font-medium text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="text-slate-600 hover:text-orange-600 hover:translate-x-1 transition-all flex items-center gap-3 px-3 py-2.5 font-medium text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="bolt">bolt</span>
                <span>Services</span>
            </a>
            <a class="text-slate-600 hover:text-orange-600 hover:translate-x-1 transition-all flex items-center gap-3 px-3 py-2.5 font-medium text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                <span>Orders</span>
            </a>
            <a class="text-slate-600 hover:text-orange-600 hover:translate-x-1 transition-all flex items-center gap-3 px-3 py-2.5 font-medium text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="rate_review">rate_review</span>
                <span>Reviews</span>
            </a>
            <a class="text-slate-600 hover:text-orange-600 hover:translate-x-1 transition-all flex items-center gap-3 px-3 py-2.5 font-medium text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span>Profile</span>
            </a>
            <a class="text-slate-600 hover:text-orange-600 hover:translate-x-1 transition-all flex items-center gap-3 px-3 py-2.5 font-medium text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span>Settings</span>
            </a>
        </nav>
        <div class="mt-auto pt-6 flex flex-col gap-1">
           
            <a class="text-slate-600 hover:text-orange-600 flex items-center gap-3 px-3 py-2 font-medium text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span>Logout</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="md:ml-64 min-h-screen">
        <!-- TopNavBar Shell -->
        <header class="w-full sticky top-0 z-50 glass-nav shadow-sm flex justify-between items-center px-6 h-16">
            <div class="flex items-center gap-4">
                <h2 class="text-xl font-black text-slate-900 font-headline tracking-tight">SolarGrid Pro</h2>
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
                        <p class="text-xs font-bold text-slate-900">Jean Dupont</p>
                        <p class="text-[10px] text-slate-500">Expert Solaire</p>
                    </div>
                    <img alt="Provider Profile Avatar" class="w-10 h-10 rounded-full object-cover ring-2 ring-white"
                        data-alt="Professional headshot of a middle-aged man with a friendly smile, clean-cut, wearing a smart casual navy shirt"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdv2wuVjxd8NPkdzz6X6SaIQF2_XhvLR8A-hhzuu8E0-sdJwyT8vKjUopNwz8SSGQpBwnL1M4veCnt8QKWPFQkyifoWeOnuV32_kkX-G3T4Cwgzi2ol70kyrpYv32m2wkKwh_Kv5RghjaBbqE61amSpSq_fqzs9GYJy4kkL7EdqnpJIrPz1OvZI4_yFrgHqz4Xs_4roH5izKz9xamzRPCJVoll3QvzgEsB-ZopektVG1saZxqqO-ps3_NvtSQIE_OXiGZJfQi4jho" />
                </div>
            </div>
        </header>
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
                    <span>24 Mai 2024</span>
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
                        <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full">+12%</span>
                    </div>
                    <div class="mt-4">
                        <p class="text-label-sm text-on-surface-variant font-medium">Revenu ce mois</p>
                        <h4 class="text-2xl font-black font-headline mt-1">12 450 €</h4>
                    </div>
                </div>
                <!-- Orders Card -->
                <div class="bg-surface-container-lowest p-6 rounded-xl transition-all hover:scale-[1.01]">
                    <div class="flex items-start justify-between">
                        <div class="p-3 bg-secondary-container/30 rounded-lg text-secondary">
                            <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                        </div>
                        <span class="text-xs font-bold text-slate-500 bg-slate-50 px-2 py-1 rounded-full">Stable</span>
                    </div>
                    <div class="mt-4">
                        <p class="text-label-sm text-on-surface-variant font-medium">Commandes actives</p>
                        <h4 class="text-2xl font-black font-headline mt-1">28</h4>
                    </div>
                </div>
                <!-- Rating Card -->
                <div class="bg-surface-container-lowest p-6 rounded-xl transition-all hover:scale-[1.01]">
                    <div class="flex items-start justify-between">
                        <div class="p-3 bg-tertiary-fixed/30 rounded-lg text-tertiary">
                            <span class="material-symbols-outlined" data-icon="star"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full">4.9/5</span>
                    </div>
                    <div class="mt-4">
                        <p class="text-label-sm text-on-surface-variant font-medium">Note moyenne</p>
                        <h4 class="text-2xl font-black font-headline mt-1">4.85</h4>
                    </div>
                </div>
                <!-- Leads Card -->
                <div class="bg-surface-container-lowest p-6 rounded-xl transition-all hover:scale-[1.01]">
                    <div class="flex items-start justify-between">
                        <div class="p-3 bg-orange-100 rounded-lg text-orange-700">
                            <span class="material-symbols-outlined" data-icon="person_add">person_add</span>
                        </div>
                        <span class="text-xs font-bold text-orange-600 bg-orange-50 px-2 py-1 rounded-full">+5</span>
                    </div>
                    <div class="mt-4">
                        <p class="text-label-sm text-on-surface-variant font-medium">Nouveaux leads</p>
                        <h4 class="text-2xl font-black font-headline mt-1">14</h4>
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
    </main>
    <!-- BottomNavBar for Mobile Shell -->
    <nav
        class="md:hidden fixed bottom-0 left-0 right-0 glass-nav shadow-[0_-4px_20px_rgba(0,0,0,0.05)] h-16 flex items-center justify-around px-4 z-50">
        <a class="text-orange-600 flex flex-col items-center gap-1" href="#">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span class="text-[10px] font-bold">Dashboard</span>
        </a>
        <a class="text-slate-500 flex flex-col items-center gap-1" href="#">
            <span class="material-symbols-outlined" data-icon="bolt">bolt</span>
            <span class="text-[10px] font-medium">Services</span>
        </a>
        <a class="text-slate-500 flex flex-col items-center gap-1" href="#">
            <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
            <span class="text-[10px] font-medium">Commandes</span>
        </a>
        <a class="text-slate-500 flex flex-col items-center gap-1" href="#">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="text-[10px] font-medium">Profil</span>
        </a>
    </nav>
    <!-- Floating Action Button - Only for Dashboard context -->
    <button
        class="fixed bottom-24 right-6 md:bottom-8 md:right-8 bg-primary text-white p-4 rounded-full shadow-xl hover:scale-110 active:scale-95 transition-all z-40 flex items-center justify-center">
        <span class="material-symbols-outlined text-2xl" data-icon="add_circle">add_circle</span>
    </button>
</body>

</html>
