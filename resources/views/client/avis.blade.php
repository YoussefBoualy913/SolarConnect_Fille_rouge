<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SolarConnect - Avis & Services</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
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
        * {
            font-family: 'Inter', sans-serif;
        }
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
        }
        .modal-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            transition: all 0.2s ease;
        }
        .rating-star {
            cursor: pointer;
            transition: transform 0.1s ease, color 0.1s;
        }
        .rating-star:hover {
            transform: scale(1.1);
        }
        .service-card {
            transition: all 0.2s ease;
        }
        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.1);
        }
        /* Style pour les étoiles rating */
        .rating-star {
            font-variation-settings: 'FILL' 0;
            transition: all 0.1s;
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface antialiased">
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 glass-nav shadow-[0_12px_32px_rgba(18,28,40,0.06)] flex justify-between items-center px-6 py-3">
        <div class="flex items-center gap-8">
            <span class="material-symbols-outlined bg-primary-container shadow-lg shadow-primary-container text-white p-2 rounded-xl" style="font-variation-settings: 'FILL' 1;">solar_power</span>
            <span class="text-2xl font-black text-primary">SolarConnect</span>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-500 hover:bg-slate-100 transition-colors rounded-full">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
            <div class="text-right hidden sm:block">
                <p class="text-xs font-bold text-on-surface">{{Auth::user()->first_name." ".Auth::user()->last_name}}</p>
                <p class="text-[10px] text-on-surface-variant">{{ Auth::user()->email }}</p>
            </div>
            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-surface-container">
                <img alt="User profile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsbHOTLtnsz9j0LbFKo0bJflBA5717Aa3Uog3W61BX1GliuvYjcDSDINoW9TSdJwqvGAcLXglGbAYqE76VFLgp-kACJio6WGCRPk2S01KAh19nEWX3RwzplZlygILm0GBq0Lbw40DPrqs_AKPyZo6BGfb-2NWerTg1RqFC1ji7G2oMHl_SygbUZgBVBavLPGVp4m8ltmzMiL5rbIUhW9DJpo2vD4GXaM0Xl41FbWURRaH64mgiDc28qbwA1N7LWtTxWTGZ9xIbTjE" />
            </div>
        </div>
    </nav>

    <!-- SideNavBar -->
    <aside class="hidden md:flex h-screen w-64 fixed left-0 top-0 bg-slate-50 flex-col p-4 gap-2 font-['Inter'] font-medium text-sm z-40 pt-20">
        <div class="mb-8 px-2">
            <div class="text-xl font-extrabold text-on-surface">Services & Avis</div>
            <div class="text-xs text-on-surface-variant">Energy Portal</div>
        </div>
         <nav class="flex flex-col gap-1">
           
            <a class="flex items-center gap-3 p-3 text-slate-600 hover:bg-orange-50 transition-all duration-300 rounded-lg" href="{{ route('client.services.index') }}">
                <span class="material-symbols-outlined" data-icon="search">search</span>
                Recherche de services
            </a>
            <a class="text-slate-500 hover:bg-slate-100 transition-colors px-3 py-1 rounded-lg"
                href="{{ route('client.carts.index') }}">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                Cart</a>
            <a class="flex items-center gap-3 p-3 text-slate-600 hover:bg-orange-50 transition-all duration-300 rounded-lg"
                href="{{ route('client.orders.index') }}">
                <span class="material-symbols-outlined">list_alt</span>
                Commandes
            </a>
             <a class="flex items-center gap-3 p-3 bg-orange-50 text-orange-700 rounded-lg" href="{{ route('client.reiews.index') }}">
                <span class="material-symbols-outlined">rate_review</span>
                Avis & Services
            </a>
            <a class="flex items-center gap-3 p-3 text-slate-600 hover:bg-orange-50 transition-all duration-300 rounded-lg"
                href="{{ route('client.profile.show') }}">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                Profil
            </a>
        </nav>
        <div class="mt-auto pt-8 border-t border-slate-200">
            <a class="flex items-center text-slate-500 px-2 py-3 hover:text-error transition-all font-bold" href="#">
                <span class="material-symbols-outlined mr-4">logout</span>
                Déconnexion
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="pt-24 md:pl-64 min-h-screen">
        <div class="max-w-7xl mx-auto px-6 pb-20">
            <!-- Header -->
            <header class="mb-10">
                <h1 class="text-4xl md:text-5xl font-extrabold text-on-surface tracking-tight mb-4">Avis & <span class="text-primary">Services</span></h1>
                <p class="text-on-surface-variant max-w-2xl">Consultez les avis des clients et découvrez les services qui n'ont pas encore reçu de retour. Partagez votre expérience !</p>
            </header>

            <!-- Deux sections : Avis récents + Services sans avis -->
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Colonne gauche : Avis existants -->
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-black text-on-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">star</span>
                            Derniers avis clients
                        </h2>
                        <span class="text-xs text-on-surface-variant bg-surface-container-high px-3 py-1 rounded-full">{{$reviews->count()}} avis</span>
                    </div>
                    <div class="space-y-5">
                        <!-- Avis 1 -->

                        @foreach ($reviews as $review )
                            
                        <div class="bg-surface-container-lowest rounded-xl p-5 shadow-sm border border-outline-variant/20">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <div class="w-8 h-8 rounded-full bg-primary-container/20 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary text-sm">person</span>
                                        </div>
                                        <span class="font-bold text-on-surface">{{$review->service->prestataire->company_name}}</span>
                                    </div>
                                    <div class="flex items-center gap-1 mt-1">
                                        @if ($review->rating === 1)
                                        <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                         @elseif ($review->rating === 2)
                                          <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                          <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                        @elseif ($review->rating === 3)
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                        @elseif ($review->rating === 4)
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-outline text-sm">star</span>
                                        @else
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         <span class="material-symbols-outlined text-tertiary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                         @endif
                                    </div>
                                </div>
                                <span class="text-xs text-on-surface-variant">{{$review->created_at}}</span>
                            </div>
                            <p class="text-sm text-on-surface-variant leading-relaxed">{{ $review->comment }} !</p>
                            <div class="mt-3 pt-2 border-t border-outline-variant/20">
                                <span class="text-xs font-medium text-primary">Service: {{$review->service->title}}</span>
                            </div>
                        </div>
                        @endforeach
                      
                       
                    </div>
                </div>

                <!-- Colonne droite : Services sans avis + bouton pour ajouter un avis -->
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-black text-on-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary">pending</span>
                            Services sans avis
                        </h2>
                        <span class="text-xs text-on-surface-variant bg-surface-container-high px-3 py-1 rounded-full">{{ $services->count() }} services</span>
                    </div>
                    <div class="space-y-5">
                        <!-- Service sans avis 1 -->
                    @foreach ($services as $service)
                        
                    <div class="service-card bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/20 flex flex-col md:flex-row">
                        <div class="md:w-32 h-32 bg-surface-container-high flex items-center justify-center">
                            <span class="material-symbols-outlined text-4xl text-on-surface-variant/50">solar_power</span>
                        </div>
                        <div class="flex-1 p-4">
                            <h3 class="font-extrabold text-on-surface">{{$service->title}}</h3>
                                <p class="text-xs text-on-surface-variant mt-1">{{$service->description}}</p>
                                <div class="flex justify-between items-center mt-3">
                                    <span class="text-primary font-bold text-sm">{{$service->price}} MAD</span>
                                    <button class="open-modal-btn bg-primary text-on-primary px-4 py-1.5 rounded-lg text-xs font-bold shadow-md hover:bg-primary/80 transition-all flex items-center gap-1" data-service-id="{{ $service->id }}" data-service-name="{{ $service->title }}">
                                        <span class="material-symbols-outlined text-sm">rate_review</span>
                                        Donner mon avis
                                    </button>
                                </div>
                            </div>
                        </div>
                     @endforeach
                         
                    </div>
                    <div class="mt-6 text-center text-on-surface-variant text-sm bg-surface-container-high/30 rounded-xl p-4">
                        <span class="material-symbols-outlined text-primary align-middle mr-1">info</span>
                        Seuls les services sans avis apparaissent ici. Votre retour est précieux !
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MODAL pour ajouter un avis -->
    <div id="reviewModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 modal-overlay" id="modalBackdrop"></div>
        <div class="bg-surface-container-lowest rounded-2xl shadow-2xl w-full max-w-md mx-4 transform transition-all p-6 relative z-10">
            <div class="flex justify-between items-center mb-5">
                <h3 class="font-headline font-extrabold text-xl text-on-surface flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">rate_review</span>
                    Nouvel avis
                </h3>
                <button id="closeModalBtn" class="text-on-surface-variant hover:text-error transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form id="reviewForm" action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="block text-sm font-bold text-on-surface-variant mb-2">Service concerné</label>
                    <input type="text" id="modalServiceName" class="w-full px-4 py-2.5 rounded-xl border border-outline-variant bg-surface-container-low text-on-surface-variant focus:ring-2 focus:ring-primary/30" readonly disabled>
                </div>
                <div class="mb-5">
                    <label class="block text-sm font-bold text-on-surface-variant mb-2">Votre note (1 à 5 )</label>
                    
                    <input type="number" name="rating" class="w-full px-4 py-2.5 rounded-xl border border-outline-variant  text-on-surface-variant focus:ring-2 focus:ring-primary/30" min="1" max="5" id="selectedRating" value="">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-bold text-on-surface-variant mb-2">Votre commentaire</label>
                    <textarea id="reviewComment" name="comment" rows="4" class="w-full px-4 py-2.5 rounded-xl border border-outline-variant bg-surface focus:ring-2 focus:ring-primary/30 focus:border-primary outline-none transition" placeholder="Partagez votre expérience avec ce service..."></textarea>
                </div>
                <div class="flex gap-3 justify-end">
                    <button type="button" id="cancelModalBtn" class="px-5 py-2 rounded-lg border border-outline-variant text-on-surface-variant font-semibold hover:bg-surface-container-high transition">Annuler</button>
                    <button type="submit" class="px-5 py-2 rounded-lg bg-primary text-on-primary font-bold shadow-sm hover:bg-primary/80 transition">Publier l'avis</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const modal = document.getElementById('reviewModal');
        const modalServiceName = document.getElementById('modalServiceName');
        const modalReviewsForm = document.getElementById('reviewForm');
        let currentServiceName = '';
        let currentServiceId = '';

       

       
        document.querySelectorAll('.open-modal-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                currentServiceName = btn.getAttribute('data-service-name');
                currentServiceId =parseInt(btn.getAttribute('data-service-id'));
                modalServiceName.value = currentServiceName;
                document.getElementById('reviewComment').value = '';
                modalReviewsForm.action = `/client/reviews/${currentServiceId}`;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });

        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
        document.getElementById('closeModalBtn').addEventListener('click', closeModal);
        document.getElementById('cancelModalBtn').addEventListener('click', closeModal);
        document.getElementById('modalBackdrop').addEventListener('click', closeModal);

        document.getElementById('reviewForm').addEventListener('submit', (e) => {
            const rating = document.getElementById('selectedRating').value.trim();
            const comment = document.getElementById('reviewComment').value.trim();
            if (rating === 0) {
                e.preventDefault();
                alert("Veuillez sélectionner une note (1 à 5 ).");
                return;
            }
            if (!comment) {
                e.preventDefault();
                alert("Veuillez écrire un commentaire.");
                return;
            }
        });
    </script>
</body>
</html>