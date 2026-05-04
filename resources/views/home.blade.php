<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SolarConnect | Clean Energy Solutions</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec5b13",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                        "accent-yellow": "#fbad18",
                        "accent-green": "#4ade80",
                    },
                    fontFamily: {
                        "display": ["Public Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
    <!-- Top Navigation Bar -->
    <header
        class="sticky top-0 z-50 w-full border-b border-primary/10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
              <div class="flex items-center gap-2">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-white">
                        <span class="material-symbols-outlined">solar_power</span>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">SolarConnect</span>
                </div>  
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#how-it-works">Comment ça
                        marche</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors"
                        href="#providers">Prestataires</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Tarifs</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">À propos</a>
                </nav>
                <div class="flex items-center gap-4">
                    <a href="{{ route('users.register') }}"
                        class="hidden sm:block text-sm font-semibold hover:text-primary transition-colors">S'inscrire</a>
                    <a    href="{{ route('login') }}"
                        class="rounded-xl bg-primary px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">Connexion</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-32">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="flex flex-col gap-8">
                        <div
                            class="inline-flex items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-sm font-semibold text-primary">
                            <span class="relative flex h-2 w-2"><span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span><span
                                    class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span></span>Désormais
                            disponible dans 50+ grandes villes</div>
                        <h1
                            class="text-5xl lg:text-7xl font-black leading-tight tracking-tight text-slate-900 dark:text-white">
                            Le Soleil Est Votre <span class="text-primary">Propre</span> Centrale Électrique</h1>
                        <p class="text-lg text-slate-600 dark:text-slate-400 max-w-xl">Rejoignez des milliers de
                            propriétaires économisant jusqu'à 70 % sur leurs factures d'énergie mensuelles. Nous vous
                            mettons en relation avec des experts solaires locaux certifiés en quelques minutes.</p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <div class="flex-1 max-w-sm relative">
                                <span
                                    class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400">location_on</span>
                                <input
                                    class="w-full rounded-xl border-primary/20 bg-white dark:bg-slate-800 py-4 pl-10 pr-4 focus:border-primary focus:ring-primary shadow-sm"
                                    placeholder="Entrez votre code postal" type="text" />
                            </div>
                            <button
                                class="rounded-xl bg-primary px-8 py-4 text-base font-bold text-white hover:scale-105 transition-transform shadow-xl shadow-primary/30">Trouver
                                des installateurs</button>
                        </div>
                        <div class="flex items-center gap-4 text-sm text-slate-500">
                            <div class="flex -space-x-2">
                                <div class="h-8 w-8 rounded-full border-2 border-white bg-slate-200"
                                    data-alt="Satisfied customer profile photo 1"></div>
                                <div class="h-8 w-8 rounded-full border-2 border-white bg-slate-300"
                                    data-alt="Satisfied customer profile photo 2"></div>
                                <div class="h-8 w-8 rounded-full border-2 border-white bg-slate-400"
                                    data-alt="Satisfied customer profile photo 3"></div>
                            </div>
                            <span>Rejoignez plus de 12 000 foyers heureux</span>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="aspect-square rounded-3xl bg-primary/5 p-4 border border-primary/10">
                            <div class="w-full h-full rounded-2xl bg-cover bg-center shadow-2xl"
                                data-alt="Modern residential house with sleek solar panels on roof"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB1VaEl0th8blL1xQGEVsgH-RPuFx_VHTmSOjnrQuIbcP6qJ1hje8mlhzxms8kT5DU-QVE_N_bQpCNo5wambCBr5cdWdn0w7ojfgQbiAPjWAcDHC7kmkrMaUGJhuyFU-qmJ4uQXS0HSnchYCHpgtaRz-LSofkpw-0yVtxqvyQRkOwjBACSs7tjBSQAvKuap9XwkVIDvELN30Jk_sChXynImhqV3CcIZJ5hV2Fwbog-e7Ok6j1FpC-FMRGUlUGqk3EBvPgvH_jwqb9U')">
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-6 -left-6 bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-xl border border-primary/10 flex items-center gap-4">
                            <div
                                class="h-12 w-12 rounded-full bg-accent-green/20 flex items-center justify-center text-accent-green font-bold">
                                <span class="material-symbols-outlined">eco</span>
                            </div>
                            <div>
                                <p class="text-2xl font-black text-slate-900 dark:text-white">4.2 Tons</p>
                                <p class="text-xs text-slate-500">CO2 économisé par an</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How It Works Section -->
        <section class="py-24 bg-primary/5 dark:bg-primary/10" id="how-it-works">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-primary font-bold tracking-widest uppercase text-sm mb-4">Le Processus</h2>
                    <h3 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white">Trois étapes vers
                        l'indépendance énergétique</h3>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Step 1 -->
                    <div class="relative group">
                        <div
                            class="bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-primary/10 shadow-sm group-hover:shadow-md transition-shadow">
                            <div
                                class="h-14 w-14 bg-accent-yellow/20 rounded-xl flex items-center justify-center text-accent-yellow mb-6">
                                <span class="material-symbols-outlined text-3xl">map</span>
                            </div>
                            <h4 class="text-xl font-bold mb-3 text-slate-900 dark:text-white">Identifier le lieu</h4>
                            <p class="text-slate-600 dark:text-slate-400">Partagez votre adresse pour analyser le
                                potentiel solaire de votre toit et les tarifs locaux.</p>
                            <div class="mt-6 flex items-center text-primary font-bold text-sm">
                                <span>Étape 01</span>
                                <div class="ml-auto h-px w-12 bg-primary/20"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="relative group">
                        <div
                            class="bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-primary/10 shadow-sm group-hover:shadow-md transition-shadow">
                            <div
                                class="h-14 w-14 bg-primary/20 rounded-xl flex items-center justify-center text-primary mb-6">
                                <span class="material-symbols-outlined text-3xl">compare_arrows</span>
                            </div>
                            <h4 class="text-xl font-bold mb-3 text-slate-900 dark:text-white">Comparer les devis</h4>
                            <p class="text-slate-600 dark:text-slate-400">Obtenez trois offres compétitives
                                d'installateurs locaux présélectionnés et hautement qualifiés.</p>
                            <div class="mt-6 flex items-center text-primary font-bold text-sm">
                                <span>Étape 02</span>
                                <div class="ml-auto h-px w-12 bg-primary/20"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="relative group">
                        <div
                            class="bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-primary/10 shadow-sm group-hover:shadow-md transition-shadow">
                            <div
                                class="h-14 w-14 bg-accent-green/20 rounded-xl flex items-center justify-center text-accent-green mb-6">
                                <span class="material-symbols-outlined text-3xl">bolt</span>
                            </div>
                            <h4 class="text-xl font-bold mb-3 text-slate-900 dark:text-white">Économiser de l'énergie
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400">Choisissez la meilleure offre, planifiez votre
                                installation et regardez votre compteur tourner à l'envers.</p>
                            <div class="mt-6 flex items-center text-primary font-bold text-sm">
                                <span>Étape 03</span>
                                <div class="ml-auto h-px w-12 bg-primary/20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Rated Providers -->
        <section class="py-24" id="providers">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                    <div>
                        <h2 class="text-primary font-bold tracking-widest uppercase text-sm mb-4">Réseaux de confiance
                        </h2>
                        <h3 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white">Installateurs
                            solaires les mieux notés</h3>
                    </div>
                    <button class="flex items-center gap-2 text-primary font-bold hover:underline">Voir les 250+
                        prestataires <span class="material-symbols-outlined">arrow_forward</span></button>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Provider 1 -->
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-primary/10 shadow-lg hover:translate-y-[-4px] transition-transform">
                        <div class="h-40 w-full bg-cover bg-center"
                            data-alt="Professional solar installation crew at work"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBWv6pJ-AHbSJ7OXY6VoUiU8uhr0OAhkYyIMjaIxO6vcDB2ZbpvENKUmq9hSuH59_S4A9kl3s0bPoq4jxLv47ZYAifp_qG2pRwqy8-X3uYRITVKc2jp6eWIgVzDJpOu3o5lq2jqnrwZIKUgmcnCjJd6ZgEZ4uxpOe9H7ZZB9Hba3RtPLG3Gei6CYSg_WD4qz6u-6ZHBSqXP_q3T1MFAJD7krrO2TVXUr9o_ZK65NVRBRI8D1PRH65t06HKavSmZ1FzXJFPoUByEj60')">
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <h5 class="font-bold text-lg text-slate-900 dark:text-white">SunRay Systems</h5>
                                <div class="flex items-center gap-1 text-accent-yellow">
                                    <span class="material-symbols-outlined text-sm">star</span>
                                    <span class="text-sm font-bold">4.9</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 mb-4">Austin, Texas • 15 ans d'exp.</p>
                            <div class="flex gap-2">
                                <span
                                    class="px-2 py-1 bg-primary/10 text-primary text-[10px] font-bold rounded uppercase">Panneaux
                                    Tier 1</span>
                                <span
                                    class="px-2 py-1 bg-accent-green/10 text-accent-green text-[10px] font-bold rounded uppercase">Installation
                                    rapide</span>
                            </div>
                        </div>
                    </div>
                    <!-- Provider 2 -->
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-primary/10 shadow-lg hover:translate-y-[-4px] transition-transform">
                        <div class="h-40 w-full bg-cover bg-center"
                            data-alt="Array of blue photovoltaic panels under bright sun"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCY2uHUfrgeNU91PzHkDBqUb4oIg4RKIPk4FaLw33LPtOEU8zi0EMZfuLD_ur4qxavW67q3xbkPMhOR0q9paIA6EI9tsksyLntXaDYe5t7qpJhHrQNBHjpYfPNf3qOYmXUx9DGu-7fMNuY_CYMFsRWusB2B4u_9ib4h_OCFAprGxaIVuXO4foPP0r7kmDopHj6JdJMzSmW0Oen13Pv8nQALbfI9W__2vSWc5cymS0M-8gZ5AdEaemr3sa__8b2AGGdI9oeozVbsjOo')">
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <h5 class="font-bold text-lg text-slate-900 dark:text-white">EcoVolt Solar</h5>
                                <div class="flex items-center gap-1 text-accent-yellow">
                                    <span class="material-symbols-outlined text-sm">star</span>
                                    <span class="text-sm font-bold">4.8</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 mb-4">Phoenix, Arizona • 8 ans d'exp.</p>
                            <div class="flex gap-2">
                                <span
                                    class="px-2 py-1 bg-primary/10 text-primary text-[10px] font-bold rounded uppercase">Financement
                                    bas</span>
                                <span
                                    class="px-2 py-1 bg-accent-green/10 text-accent-green text-[10px] font-bold rounded uppercase">Garantie+</span>
                            </div>
                        </div>
                    </div>
                    <!-- Provider 3 -->
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-primary/10 shadow-lg hover:translate-y-[-4px] transition-transform">
                        <div class="h-40 w-full bg-cover bg-center"
                            data-alt="Worker inspecting solar components on a roof"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAZoKK8vTWka4OBc0qdrytNKy-RB9hDdmvaSVcamawgJJ8ogblMNgKp7f0hZ2_0A058eaq6MB3-i9kFsoPcV3EY1aUtbKLeXR8EyDij-1qxL07Vr4XSO2Dtf9b4V034XDmjK9Pb0NDFru-Izo9C6bD6H1gqqbSZOcQinIRhgEVQr1UxIcRdrLWIshxRcOmd4NZ2eGrDGTSbrrJeCPDbdV96FHcH1SxZwo556cBovkpSCyqwqNaOnr8O-Wj0DHDhjCNf57s3VThAZiw')">
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <h5 class="font-bold text-lg text-slate-900 dark:text-white">Peak Power</h5>
                                <div class="flex items-center gap-1 text-accent-yellow">
                                    <span class="material-symbols-outlined text-sm">star</span>
                                    <span class="text-sm font-bold">4.9</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 mb-4">Denver, Colorado • 12 ans d'exp.</p>
                            <div class="flex gap-2">
                                <span
                                    class="px-2 py-1 bg-primary/10 text-primary text-[10px] font-bold rounded uppercase">Entreprise
                                    locale</span>
                                <span
                                    class="px-2 py-1 bg-accent-green/10 text-accent-green text-[10px] font-bold rounded uppercase">Prêt
                                    pour VE</span>
                            </div>
                        </div>
                    </div>
                    <!-- Provider 4 -->
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-primary/10 shadow-lg hover:translate-y-[-4px] transition-transform">
                        <div class="h-40 w-full bg-cover bg-center"
                            data-alt="Solar energy inverter system mounted on a wall"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD0XBcng_ihubAZaqlHJyrV_t7efLaC6FhCP2mbACObqPvLpIv5IMMdn0CfnV1j5iFqIDb5_mUw8XMi2mY3yAa0fT88E10U4KX8OCLBoLC9WyNg5E41lsmginDkd9_P0KM3tP9WuZTbWgk-I6VkgfYljkPWXTU1FkLys68_B1OcZ7qtOGraOaVl7u2vXonQPIPUqPnyQneaBOvCqs_xwkOh4WUwGPs5uvD5LBVPAwHjtGN72vEyKslGHeLmxh1RgB1iDgTfgJ7g9VA')">
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <h5 class="font-bold text-lg text-slate-900 dark:text-white">Nova Sun</h5>
                                <div class="flex items-center gap-1 text-accent-yellow">
                                    <span class="material-symbols-outlined text-sm">star</span>
                                    <span class="text-sm font-bold">4.7</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 mb-4">Miami, Floride • 10 ans d'exp.</p>
                            <div class="flex gap-2">
                                <span
                                    class="px-2 py-1 bg-primary/10 text-primary text-[10px] font-bold rounded uppercase">Maison
                                    Intelligente</span>
                                <span
                                    class="px-2 py-1 bg-accent-green/10 text-accent-green text-[10px] font-bold rounded uppercase">Résistant
                                    Tempêtes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-20 px-4">
            <div
                class="max-w-5xl mx-auto rounded-3xl bg-slate-900 dark:bg-black p-10 lg:p-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-accent-green/10 rounded-full blur-3xl -ml-24 -mb-24">
                </div>
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-12">
                    <div class="text-left">
                        <h2 class="text-4xl font-black text-white mb-4">Prêt à commencer à économiser ?</h2>
                        <p class="text-slate-300 text-lg">Calculez vos économies estimées et découvrez les crédits
                            d'impôt locaux en 2 minutes.</p>
                    </div>
                    <div class="flex shrink-0">
                        <button
                            class="bg-primary text-white font-bold px-10 py-5 rounded-2xl text-lg hover:bg-primary/90 transition-all shadow-2xl shadow-primary/40">Calculer
                            mes économies</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-slate-50 dark:bg-slate-900/50 pt-20 pb-10 border-t border-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
                <div class="col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="flex h-8 w-8 items-center justify-center rounded bg-primary text-white">
                            <span class="material-symbols-outlined text-sm">solar_power</span>
                        </div>
                        <span
                            class="text-lg font-bold tracking-tight text-slate-900 dark:text-white">SolarConnect</span>
                    </div>
                    <p class="text-slate-500 text-sm max-w-xs leading-relaxed">Leader de la transition vers l'énergie
                        propre en rendant l'installation solaire transparente, abordable et accessible à tous.</p>
                </div>
                <div>
                    <h6 class="font-bold text-slate-900 dark:text-white mb-4">Plateforme</h6>
                    <ul class="flex flex-col gap-3 text-sm text-slate-500">
                        <li><a class="hover:text-primary transition-colors" href="#">Comment ça marche</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Trouver des
                                prestataires</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Comparer les devis</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="font-bold text-slate-900 dark:text-white mb-4">Support</h6>
                    <ul class="flex flex-col gap-3 text-sm text-slate-500">
                        <li><a class="hover:text-primary transition-colors" href="#">Centre d'aide</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Contactez-nous</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Conditions
                                d'utilisation</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="font-bold text-slate-900 dark:text-white mb-4">Suivez-nous</h6>
                    <div class="flex gap-4">
                        <a class="h-8 w-8 rounded bg-primary/10 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all"
                            href="#"><span class="material-symbols-outlined text-sm">public</span></a>
                        <a class="h-8 w-8 rounded bg-primary/10 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all"
                            href="#"><span class="material-symbols-outlined text-sm">mail</span></a>
                    </div>
                </div>
            </div>
            <div
                class="pt-8 border-t border-slate-200 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-400">
                <p>© 2026 SolarConnect Inc. Tous droits réservés.</p>
                <p>Fait avec ☀️ pour une planète plus propre</p>
            </div>
        </div>
    </footer>
</body>

</html>
