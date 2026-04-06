<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SolarConnect - Inscription</title>
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
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    @vite('resources/js/register.js')
    <style>
        body {
            font-family: 'Public Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">

    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <!-- Header / TopNavBar -->
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 px-6 md:px-20 py-4 bg-white dark:bg-slate-900">
                <div class="flex items-center gap-3 text-primary">
                    <div class="size-8 flex items-center justify-center bg-primary text-white rounded-lg">
                        <span class="material-symbols-outlined">solar_power</span>
                    </div>
                    <h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">
                        SolarConnect</h2>
                </div>
                <button
                    class="flex items-center justify-center rounded-full size-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </header>
            <main class="flex-1 flex flex-col items-center justify-center px-4 py-12">
                
                <div class="step1 max-w-[800px] w-full flex flex-col gap-8">
                    <!-- Title Section -->
                    <div class="flex flex-col gap-3 text-center">
                        <h1
                            class="text-slate-900 dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-tight">
                            Bienvenue sur SolarConnect</h1>
                        <p class="text-slate-600 dark:text-slate-400 text-lg">Choisissez votre profil pour commencer
                            votre aventure solaire</p>
                    </div>
                    <!-- Role Selection Cards -->
                    <div class="cards-container grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                        <!-- Client Card -->
                        <div data-type="client"
                            class="card group relative flex flex-col items-stretch justify-start rounded-xl border-2 border-transparent bg-white dark:bg-slate-900 shadow-sm transition-all cursor-pointer p-2">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg overflow-hidden"
                                data-alt="Une maison moderne avec des panneaux solaires installés sur le toit"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDj54f4uRpVLH3KIdUNwOFCBWU5f9SaYnG-rUJePscUe3GF5_Jkl6R8BEBWVeTtsVFIhUkHdkwRP1f2jGUs1IqOKKFCBDrQRxzUnF13OW0hyTqGL2OSg0d42KxGbLKZCFb4DDrwQTpECl7s8rczioIY-W_peSpWHfQ0mmc7NFCr3Apo6SBrLPPcFBvV06_pIyLwqTaRnlChub1J0fjd2GwZASTsHPe39jOOcP0ZJrTizjnfH6RuT5U6YdUyi9rBTn3pzWNTUU_6Uws");'>
                            </div>
                            <div class="flex flex-col gap-2 p-5">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="text-primary/80 dark:text-primary/90 text-xs font-bold uppercase tracking-widest">Particulier
                                        ou Entreprise</span>
                                    <span
                                        class="check_circle material-symbols-outlined text-primary opacity-0 hover:transition-opacity">check_circle</span>
                                </div>
                                <h3 class="text-slate-900 dark:text-white text-2xl font-bold">Client</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed">
                                    Je recherche des solutions solaires pour mon projet d'autoconsommation ou de
                                    rénovation énergétique.
                                </p>
                            </div>
                        </div>
                        <!-- Provider Card -->
                        <div data-type="prestataire"
                            class="card group relative flex flex-col items-stretch justify-start rounded-xl border-2 border-transparent  bg-white dark:bg-slate-900 shadow-sm transition-all cursor-pointer p-2">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg overflow-hidden"
                                data-alt="Un technicien professionnel installant des panneaux photovoltaïques"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAWOxt624GtPVAffsyBITj13J2mmx1Tpl12RDqyM-53kego5ACZmKwbylEsyFiOzXZBMrOn23MiZ-eMwtn4K-VImiu-8853tW57OV0c-OMIxKrFWTXUABwL1K8xDl2TxjhhzNaDGSOG0uvEkcB5yA_tBKWVJlRZ9MhnqYH0qnLICvFVx_vJWpuyRtiQEOOwizigO6FltwvnOF4dRgdti_ocs0UurQzIflLLmobsYCYsXd45UIPM_YbojQNmqgzIfh1ylA5VxCHmtqk");'>
                            </div>
                            <div class="flex flex-col gap-2 p-5">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="text-primary/80 dark:text-primary/90 text-xs font-bold uppercase tracking-widest">Expert
                                        du Solaire</span>
                                    <span
                                        class="check_circle material-symbols-outlined text-primary opacity-0 hover:transition-opacity">check_circle</span>
                                </div>
                                <h3 class="text-slate-900 dark:text-white text-2xl font-bold">Prestataire</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed">
                                    Je suis un installateur ou un bureau d'études et je souhaite proposer mes services à
                                    de nouveaux clients.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Action -->
                    <div class="flex flex-col items-center gap-6 mt-8">
                        <button data-type=""
                            class="step1_btn_next flex min-w-[280px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-14 px-10 bg-primary hover:bg-primary/90 text-white text-lg font-bold transition-transform active:scale-95 shadow-lg shadow-primary/20">
                            <span class="truncate">Suivant</span>
                            <span class="material-symbols-outlined ml-2">arrow_forward</span>
                        </button>
                        <div class="flex items-center gap-2 text-slate-500 dark:text-slate-500 text-sm">
                            <span>Vous avez déjà un compte ?</span>
                            <a class="text-primary font-semibold hover:underline" href="#">Se connecter</a>
                        </div>
                    </div>
                </div>

                <!-- step 2 -->
                {{-- client inscription  --}}
                <div class="step2_client hidden layout-content-container flex flex-col max-w-[640px] flex-1">
                <!-- Progress Stepper -->
                <div class="flex flex-col gap-4 mb-8">
                    <div class="flex justify-between items-end">
                        <div class="flex flex-col">
                            <span class="text-primary font-semibold text-sm uppercase tracking-wider">Étape 2 /2</span>
                            <h2 class="text-slate-900 dark:text-white text-2xl font-bold mt-1">Informations personnelles
                            </h2>
                        </div>
                    </div>
                    
                    <p class="text-slate-500 dark:text-slate-400 text-sm">Complétez votre profil pour nous aider à
                        personnaliser votre expérience.</p> 
                </div>
                <!-- Form Section -->
                <form action="" method="POST"
                    class="space-y-6 bg-white dark:bg-slate-800/40 p-6 md:p-8 rounded-xl shadow-sm border border-slate-100 dark:border-slate-800">
                 @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Prénom -->
                        <div class="flex flex-col gap-2">
                            <label class="text-slate-700 dark:text-slate-200 text-sm font-medium"
                                for="first-name">Prénom</label>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent px-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="first-name" name="first-name" placeholder="ex: Jean" required="" type="text" />
                        </div>
                        <!-- Nom -->
                        <div class="flex flex-col gap-2">
                            <label class="text-slate-700 dark:text-slate-200 text-sm font-medium"
                                for="last-name">Nom</label>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent px-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="last-name" name="last-name" placeholder="ex: Dupont" required="" type="text" />
                        </div>
                    </div>
                    <!-- Téléphone -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-slate-200 text-sm font-medium" for="phone">Numéro de
                            téléphone</label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined">call</span>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent pl-12 pr-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="phone" name="phone" placeholder="06 12 34 56 78" required="" type="tel" />
                        </div>
                    </div>
                    <!-- Adresse -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-slate-200 text-sm font-medium"
                            for="address">Adresse</label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined">home</span>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent pl-12 pr-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="address" name="address" placeholder="123 rue de l'Énergie" required=""
                                type="text" />
                        </div>
                    </div>
                    <!-- Ville -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-slate-200 text-sm font-medium" for="city">Ville</label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined">location_on</span>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent pl-12 pr-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="city" name="city" placeholder="Paris" required="" type="text" />
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <button 
                            class="client_btn_prev flex-1 px-6 py-3.5 rounded-xl border-2 border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 font-semibold hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-all flex items-center justify-center gap-2"
                            type="button">
                            <span class="material-symbols-outlined text-[20px]">arrow_back</span>
                            Précédent
                        </button>
                        <button
                            class="flex-[2] px-6 py-3.5 rounded-xl bg-primary text-white font-semibold shadow-lg shadow-primary/25 hover:bg-primary/90 active:scale-[0.98] transition-all flex items-center justify-center gap-2"
                            type="submit">
                            S'inscrire
                        </button>
                    </div>
                   
                </form>
                <!-- Support Footer -->
               
            </div>
            
                {{-- pretataire inscription  --}}

               <div class="step2_prestataire hidden layout-content-container flex flex-col max-w-[640px] flex-1">
                <!-- Progress Stepper -->
                <div class="flex flex-col gap-4 mb-8">
                    <div class="flex justify-between items-end">
                        <div class="flex flex-col">
                            <span class="step_number text-primary font-semibold text-sm uppercase tracking-wider">Étape 2/3</span>
                            <h2 class="step_title text-slate-900 dark:text-white text-2xl font-bold mt-1">Informations personnelles
                            </h2>
                        </div>
                    </div>
                    
                    <p class="text-slate-500 dark:text-slate-400 text-sm">Complétez votre profil pour nous aider à
                        personnaliser votre expérience.</p> 
                </div>
                <!-- Form Section -->
                <form
                    class="space-y-6 bg-white dark:bg-slate-800/40 p-6 md:p-8 rounded-xl shadow-sm border border-slate-100 dark:border-slate-800">

                    <div class="step2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Prénom -->
                        <div class="flex flex-col gap-2">
                            <label class="text-slate-700 dark:text-slate-200 text-sm font-medium"
                                for="first-name">Prénom</label>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent px-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="first-name" name="first-name" placeholder="ex: Jean" required="" type="text" />
                        </div>
                        <!-- Nom -->
                        <div class="flex flex-col gap-2">
                            <label class="text-slate-700 dark:text-slate-200 text-sm font-medium"
                                for="last-name">Nom</label>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent px-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="last-name" name="last-name" placeholder="ex: Dupont" required="" type="text" />
                        </div>
                    </div>
                    <!-- Téléphone -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-slate-200 text-sm font-medium" for="phone">Numéro de
                            téléphone</label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined">call</span>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent pl-12 pr-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="phone" name="phone" placeholder="06 12 34 56 78" required="" type="tel" />
                        </div>
                    </div>
                    <!-- Adresse -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-slate-200 text-sm font-medium"
                            for="address">Adresse</label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined">home</span>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent pl-12 pr-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="address" name="address" placeholder="123 rue de l'Énergie" required=""
                                type="text" />
                        </div>
                    </div>
                    <!-- Ville -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-slate-200 text-sm font-medium" for="city">Ville</label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined">location_on</span>
                            <input
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-transparent pl-12 pr-4 py-3 text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors"
                                id="city" name="city" placeholder="Paris" required="" type="text" />
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <button
                            class="prestataire_step2_btn_prev flex-1 px-6 py-3.5 rounded-xl border-2 border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 font-semibold hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-all flex items-center justify-center gap-2"
                            type="button">
                            <span class="material-symbols-outlined text-[20px]">arrow_back</span>
                            Précédent
                        </button>
                        <button
                            class="prestataire_step2_btn_next flex-[2] px-6 py-3.5 rounded-xl bg-primary text-white font-semibold shadow-lg shadow-primary/25 hover:bg-primary/90 active:scale-[0.98] transition-all flex items-center justify-center gap-2"
                            type="button">
                            Suivant
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </button>
                    </div>
                    </div>

                    <div class="step3 hidden">
                        <div
                    class="bg-white dark:bg-slate-900/50 p-6 md:p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 flex flex-col gap-8">
                    <!-- Company Info Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Nom de
                                l'entreprise</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">business</span>
                                <input
                                    class="w-full pl-10 pr-4 py-3 rounded-xl border-slate-200 dark:border-slate-800 dark:bg-slate-900 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                                    placeholder="Ex: Solaire Plus SARL" type="text" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Numéro SIRET</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">fingerprint</span>
                                <input
                                    class="w-full pl-10 pr-4 py-3 rounded-xl border-slate-200 dark:border-slate-800 dark:bg-slate-900 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                                    placeholder="14 chiffres" type="text" />
                            </div>
                        </div>
                    </div>
                    <hr class="border-slate-100 dark:border-slate-800" />
                    <!-- Document Upload Section -->
                    <div class="flex flex-col gap-6">
                        <h3 class="text-lg font-bold flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">verified_user</span>
                            Documents justificatifs
                        </h3>
                        <!-- File Upload 1: Assurance -->
                        <div class="flex flex-col gap-3">
                            <div class="flex justify-between items-center">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Assurance
                                    Décennale (PDF)</label>
                                <span
                                    class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded text-slate-500">OBLIGATOIRE</span>
                            </div>
                            <div
                                class="group relative border-2 border-dashed border-slate-200 dark:border-slate-800 hover:border-primary/50 hover:bg-primary/5 rounded-2xl p-6 transition-all cursor-pointer flex flex-col items-center justify-center gap-2">
                                <input accept=".pdf" class="absolute inset-0 opacity-0 cursor-pointer" type="file" />
                                <span
                                    class="material-symbols-outlined text-3xl text-slate-400 group-hover:text-primary transition-colors">upload_file</span>
                                <div class="text-center">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Cliquez pour
                                        téléverser ou glissez le fichier</p>
                                    <p class="text-xs text-slate-500 mt-1">Taille max : 5 Mo</p>
                                </div>
                            </div>
                        </div>
                        <!-- File Upload 2: Certification RGE -->
                        <div class="flex flex-col gap-3">
                            <div class="flex justify-between items-center">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Certification
                                    RGE (PDF)</label>
                                <span
                                    class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded text-slate-500">OBLIGATOIRE</span>
                            </div>
                            <div
                                class="group relative border-2 border-dashed border-slate-200 dark:border-slate-800 hover:border-primary/50 hover:bg-primary/5 rounded-2xl p-6 transition-all cursor-pointer flex flex-col items-center justify-center gap-2">
                                <input accept=".pdf" class="absolute inset-0 opacity-0 cursor-pointer" type="file" />
                                <span
                                    class="material-symbols-outlined text-3xl text-slate-400 group-hover:text-primary transition-colors">verified</span>
                                <div class="text-center">
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Cliquez pour
                                        téléverser ou glissez le fichier</p>
                                    <p class="text-xs text-slate-500 mt-1">Taille max : 5 Mo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Terms -->
                    <div class="flex gap-3 items-start">
                        <input class="mt-1 rounded border-slate-300 text-primary focus:ring-primary h-4 w-4" id="terms"
                            type="checkbox" />
                        <label class="text-xs text-slate-500 leading-relaxed" for="terms">
                            Je certifie sur l'honneur l'exactitude des informations fournies. SolarConnect se réserve le
                            droit de vérifier ces documents auprès des organismes compétents.
                        </label>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex flex-col-reverse sm:flex-row gap-4 mt-4">
                        <button
                            class="prestataire_step3_btn_prev flex-1 px-6 py-4 rounded-xl border border-slate-200 dark:border-slate-700 font-bold hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            Retour
                        </button>
                        <button
                            class="flex-1 px-6 py-4 rounded-xl bg-primary text-white font-bold hover:opacity-90 shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2">
                            Finaliser l'inscription
                            <span class="material-symbols-outlined">check_circle</span>
                        </button>
                    </div>
                </div>

                </div>
             </form>
                <!-- Support Footer -->
               
            </div>


            </main>
            <!-- Bottom Accents -->
            <!-- <div class="flex justify-center gap-2 pb-8">
                <div class="h-1.5 w-12 rounded-full bg-primary"></div>
                <div class="h-1.5 w-12 rounded-full bg-slate-300 dark:bg-slate-700"></div>
                <div class="h-1.5 w-12 rounded-full bg-slate-300 dark:bg-slate-700"></div>
            </div> -->
        </div>
    </div>

    <footer class="py-6 px-10 border-t border-slate-200 dark:border-slate-800 text-center">
            <p class="text-slate-400 text-xs">© 2026 SolarConnect. Tous droits réservés. Propulsé par l'énergie solaire.
            </p>
    </footer>
</body>

</html>