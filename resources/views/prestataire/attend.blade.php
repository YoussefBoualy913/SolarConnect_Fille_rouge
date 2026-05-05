<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SolarConnect - Compte en attente d'approbation</title>
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
        .animate-pulse-slow {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }
        .clock-rotate {
            animation: rotate 2s linear infinite;
        }
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface antialiased">
    <!-- TopNavBar simplifiée (pas d'accès au contenu) -->
    <nav class="fixed top-0 w-full z-50 glass-nav shadow-[0_12px_32px_rgba(18,28,40,0.06)] flex justify-between items-center px-6 py-3">
        <div class="flex items-center gap-8">
            <span class="material-symbols-outlined bg-primary-container shadow-lg shadow-primary-container text-white p-2 rounded-xl" style="font-variation-settings: 'FILL' 1;">solar_power</span>
            <span class="text-2xl font-black text-primary">SolarConnect</span>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-500 hover:bg-slate-100 transition-colors rounded-full">
                <span class="material-symbols-outlined">help</span>
            </button>
            <div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
            <div class="text-right hidden sm:block">
                <p class="text-xs font-bold text-on-surface">Espace Prestataire</p>
                <p class="text-[10px] text-on-surface-variant">En attente de validation</p>
            </div>
            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-surface-container bg-amber-100 flex items-center justify-center">
                <span class="material-symbols-outlined text-primary">pending</span>
            </div>
        </div>
    </nav>

    <!-- Main Content - Page d'alerte prestataire non approuvé -->
    <main class="min-h-screen flex items-center justify-center pt-20 pb-12 px-6">
        <div class="max-w-2xl w-full">
            <!-- Carte d'alerte principale -->
            <div class="bg-surface-container-lowest rounded-2xl shadow-xl overflow-hidden border border-outline-variant/20">
                <!-- Bandeau d'alerte coloré -->
                <div class="bg-error-container/30 px-6 py-4 border-b border-outline-variant/20">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-error-container flex items-center justify-center">
                            <span class="material-symbols-outlined text-error text-2xl" style="font-variation-settings: 'FILL' 1;">pending_actions</span>
                        </div>
                        <div>
                            <h2 class="font-headline font-black text-xl text-on-surface">Compte en attente d'approbation</h2>
                            <p class="text-sm text-on-surface-variant">Votre inscription est actuellement en cours de vérification</p>
                        </div>
                    </div>
                </div>

                <!-- Corps du message -->
                <div class="p-8 space-y-6">
                    <!-- Message principal -->
                    <div class="text-center space-y-3">
                        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-primary-container/20 mb-2">
                            <span class="material-symbols-outlined text-primary text-5xl clock-rotate">schedule</span>
                        </div>
                        <h3 class="font-headline font-black text-2xl text-on-surface">Accès temporairement restreint</h3>
                        <div class="bg-surface-container-high/50 rounded-xl p-4 max-w-md mx-auto">
                            <p class="text-on-surface-variant text-sm leading-relaxed">
                                <span class="font-bold text-primary">Cher prestataire,</span><br/>
                                Votre compte a bien été créé mais n'a pas encore été validé par notre équipe administrative.
                                Vous ne pouvez pas accéder aux fonctionnalités de l'espace prestataire tant que votre dossier n'est pas approuvé.
                            </p>
                        </div>
                    </div>

                    <!-- Informations supplémentaires -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-surface-container-low rounded-xl p-4 flex items-start gap-3">
                            <span class="material-symbols-outlined text-tertiary-container">info</span>
                            <div>
                                <h4 class="font-bold text-sm text-on-surface">Pourquoi cette validation ?</h4>
                                <p class="text-xs text-on-surface-variant mt-1">Nous vérifions vos documents et informations pour garantir la qualité des services proposés sur notre plateforme.</p>
                            </div>
                        </div>
                        <div class="bg-surface-container-low rounded-xl p-4 flex items-start gap-3">
                            <span class="material-symbols-outlined text-tertiary-container">schedule</span>
                            <div>
                                <h4 class="font-bold text-sm text-on-surface">Délai d'approbation</h4>
                                <p class="text-xs text-on-surface-variant mt-1">L'approbation prend généralement entre 24h et 72h ouvrées. Vous serez notifié par email.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Étape de progression -->
                    <div class="bg-surface-container-high/30 rounded-xl p-5">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Statut de votre dossier</span>
                            <span class="text-xs font-bold text-error-container bg-error-container/20 px-2 py-0.5 rounded-full animate-pulse-slow">En cours d'examen</span>
                        </div>
                        <div class="relative pt-2">
                            <div class="overflow-hidden h-2 text-xs flex rounded-full bg-surface-container-high">
                                <div class="w-2/4 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-tertiary-container animate-pulse-slow" style="width: 45%;"></div>
                            </div>
                            <div class="flex justify-between text-[10px] text-on-surface-variant mt-2">
                                <span>Inscription validée</span>
                                <span>Vérification en cours</span>
                                <span>Compte activé</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2 text-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-sm text-primary">mail</span>
                            <span>Une notification vous sera envoyée dès l'activation de votre compte.</span>
                        </div>
                    </div>

                    <!-- Message de contact -->
                    <div class="border-t border-outline-variant/20 pt-5 text-center">
                        <p class="text-sm text-on-surface-variant">
                            Une question ? Contactez notre support :
                            <a href="mailto:support@solarconnect.com" class="text-primary font-bold hover:underline">support@solarconnect.com</a>
                        </p>
                        <div class="flex justify-center gap-4 mt-4">
                            <button class="text-on-surface-variant hover:text-primary transition-colors p-2">
                                <span class="material-symbols-outlined">help_outline</span>
                            </button>
                            <button class="text-on-surface-variant hover:text-primary transition-colors p-2">
                                <span class="material-symbols-outlined">chat</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Pied de carte - Bouton de déconnexion uniquement -->
                <div class="bg-surface-container-low px-6 py-4 border-t border-outline-variant/20 flex justify-center">
                    <a href="{{ route('logout') }}" class="inline-flex items-center gap-2 text-error hover:bg-error-container/20 transition-all px-5 py-2.5 rounded-xl font-bold text-sm">
                        <span class="material-symbols-outlined">logout</span>
                        Se déconnecter
                    </a>
                </div>
            </div>

            <!-- Message d'information supplémentaire -->
            <div class="text-center mt-6">
                <p class="text-xs text-on-surface-variant">
                    <span class="material-symbols-outlined text-sm align-middle">verified</span>
                    SolarConnect - Mise en relation professionnelle certifiée
                </p>
            </div>
        </div>
    </main>

    <!-- Footer léger -->
    <footer class="py-4 text-center border-t border-outline-variant/20 bg-surface-container-low/30">
        <p class="text-xs text-on-surface-variant">© 2025 SolarConnect. Tous droits réservés.</p>
    </footer>
</body>
</html>