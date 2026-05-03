<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title') </title>
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
        <div class="flex items-center gap-4">

            <div class="flex items-center gap-8">
                <div class="flex items-center gap-8">
                    <span
                        class="material-symbols-outlined bg-primary-container shadow-lg shadow-primary-container text-white p-2 rounded-xl"
                        style="font-variation-settings: 'FILL' 1;">solar_power</span>
                    <span class="text-2xl font-black text-primary">SolarConnect</span>
                </div>

            </div>
            @yield('search')
        </div>
        <div class="flex items-center gap-4">
            <button
                class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-slate-500">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <button
                class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-slate-500">
                <span class="material-symbols-outlined" data-icon="help">help</span>
            </button>
            <div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
            <div class="flex items-center gap-3 pl-2">
                <div class="text-right hidden sm:block">
                    <p class="text-xs font-bold text-slate-900">{{ $user->first_name }}</p>
                    <p class="text-[10px] text-slate-500">{{ $user->email }}</p>
                </div>
               <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-surface-container">
                <img alt="User profile"
                    data-alt="Professional portrait of a male user with a friendly expression in a modern office setting"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdv2wuVjxd8NPkdzz6X6SaIQF2_XhvLR8A-hhzuu8E0-sdJwyT8vKjUopNwz8SSGQpBwnL1M4veCnt8QKWPFQkyifoWeOnuV32_kkX-G3T4Cwgzi2ol70kyrpYv32m2wkKwh_Kv5RghjaBbqE61amSpSq_fqzs9GYJy4kkL7EdqnpJIrPz1OvZI4_yFrgHqz4Xs_4roH5izKz9xamzRPCJVoll3QvzgEsB-ZopektVG1saZxqqO-ps3_NvtSQIE_OXiGZJfQi4jho" />
            </div>
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
                <a class="@yield('Dashboard')"
                    href="{{ route('prestataire.dashboard') }}">
                    <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
                <a class="@yield('Services')"
                    href="{{ route('prestataire.services.index') }}">
                    <span class="material-symbols-outlined" data-icon="bolt">bolt</span>
                    Services
                </a>
                <a class="@yield('Orders')"
                    href="{{ route('prestataire.orders.index') }}">
                    <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                    Orders
                </a>
                <a class="@yield('Reviews')"
                    href="{{ route('prestataire.avis.index') }}">
                    <span class="material-symbols-outlined" data-icon="rate_review">rate_review</span>
                    Reviews
                </a>
                <a class="@yield('Profile')"
                    href="{{ route('prestataire.profile.show') }}">
                    <span class="material-symbols-outlined" data-icon="person">person</span>
                    Profile
                </a>
                

            </nav>
            <div class="mt-[66%] flex flex-col gap-1">

                <a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:text-orange-600 transition-all font-manrope font-medium text-sm"
                    href="{{ route('logout') }}">
                    <span class="material-symbols-outlined" data-icon="logout">logout</span>
                    Logout
                </a>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 md:ml-64 p-6 lg:p-10 bg-surface">

            @yield('content')

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

    </nav>

    @yield('popup')
</body>

</html>
