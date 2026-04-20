<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Cart - Luminous SolarConnect</title>
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
                        "primary-container": "#f97316",
                        "on-secondary-fixed": "#121c2a",
                        "background": "#f8f9ff",
                        "error": "#ba1a1a",
                        "on-background": "#121c28",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed": "#d9e3f6",
                        "primary-fixed": "#ffdbca",
                        "surface-container-highest": "#d9e3f4",
                        "on-tertiary-container": "#4e3e00",
                        "on-error": "#ffffff",
                        "surface": "#f8f9ff",
                        "on-secondary-fixed-variant": "#3d4756",
                        "on-primary": "#ffffff",
                        "secondary": "#555f6f",
                        "on-secondary-container": "#596373",
                        "inverse-on-surface": "#eaf1ff",
                        "on-error-container": "#93000a",
                        "tertiary": "#735c00",
                        "tertiary-container": "#cea700",
                        "on-primary-fixed-variant": "#783200",
                        "on-primary-container": "#582200",
                        "surface-container": "#e5eeff",
                        "surface-variant": "#d9e3f4",
                        "surface-tint": "#9d4300",
                        "secondary-container": "#d6e0f3",
                        "tertiary-fixed-dim": "#eec200",
                        "inverse-surface": "#27313e",
                        "tertiary-fixed": "#ffe083",
                        "on-tertiary-fixed": "#231b00",
                        "inverse-primary": "#ffb690",
                        "on-tertiary-fixed-variant": "#574500",
                        "on-surface": "#121c28",
                        "on-primary-fixed": "#341100",
                        "secondary-fixed-dim": "#bdc7d9",
                        "surface-dim": "#d1dbec",
                        "on-secondary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#eef4ff",
                        "primary": "#9d4300",
                        "outline": "#8c7164",
                        "surface-bright": "#f8f9ff",
                        "on-surface-variant": "#584237",
                        "surface-container-high": "#dfe9fa",
                        "error-container": "#ffdad6",
                        "outline-variant": "#e0c0b1"
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

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .headline {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen pb-24 md:pb-0">
    <!-- TopAppBar -->
    <header
        class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl docked full-width top-0 sticky z-50 shadow-[0_12px_32px_rgba(18,28,40,0.06)]">
        <div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
            <div class="text-2xl font-black tracking-tighter text-slate-900 dark:text-white font-['Manrope']">
                SolarConnect
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-slate-500 dark:text-slate-400 hover:opacity-80 transition-opacity font-medium"
                    href="#">Home</a>
                <a class="text-slate-500 dark:text-slate-400 hover:opacity-80 transition-opacity font-medium"
                    href="#">Explore</a>
                <a class="text-orange-600 dark:text-orange-400 font-bold hover:opacity-80 transition-opacity"
                    href="#">Cart</a>
                <a class="text-slate-500 dark:text-slate-400 hover:opacity-80 transition-opacity font-medium"
                    href="#">Profile</a>
            </nav>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-500 hover:bg-surface-container-low rounded-full transition-colors">
                    <span class="material-symbols-outlined">shopping_cart</span>
                </button>
                <button class="p-2 text-slate-500 hover:bg-surface-container-low rounded-full transition-colors">
                    <span class="material-symbols-outlined">account_circle</span>
                </button>
            </div>
        </div>
    </header>
    <main class="max-w-7xl mx-auto px-6 py-12">
        @if ($order->services)
        <div class="mb-10">
            <h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">Selected Services</h1>
            <p class="text-on-surface-variant font-medium">Review your custom solar configuration and professional
                maintenance plans.</p>
        </div>
            
     
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

            <!-- Service List -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Service Card 1 -->
                @foreach ($order->services as $service )
                    
               
                    
             
                <div
                    class="bg-surface-container-lowest p-6 rounded-xl flex flex-col sm:flex-row gap-6 transition-transform active:scale-[0.99] duration-200">
                    <div class="w-full sm:w-48 h-48 rounded-lg overflow-hidden bg-surface-container-low">
                        <img class="w-full h-full object-cover"
                            data-alt="Modern rooftop solar panel installation under a clear bright sky with high contrast sunlight and architectural details"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC87Xs6u8faTHpDgxrnIMdHHAC2DbXu92kOTT4H5DHnRLLIm1N0xoiPMqFq2bxUyo4u-UqbS93hex1IPa8gLSr3GlnNbhqjW212Q9jF-jhH9Z2YSJeM3VqSR1uHupjFw0sqmoBJvIoY2olchYp72eOCCTxxvQiuOV-kKUJHk5eFsQ5_Q3gDsz9ay0WX_HKHz3f0R1Puvw24J1xeZP09boWVmdDn9R_oYi_3aiufDD1MzH9nQFO4ma8vNOTDlwg7Re_xnVGU-4LSSsk" />
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-on-surface">{{ $service->title }}</h3>
                                <form action="{{ route('carts.destroy',$service) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                <button class="text-on-surface-variant hover:text-error transition-colors" type="submit">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                                </form>
                            </div>
                            <p class="text-sm font-medium text-primary mb-4">{{$service->description}} </p>
                             <span
                                    class="px-3 py-1 bg-tertiary-container rounded-full text-[11px] font-bold uppercase tracking-wider text-on-tertiary-container">Energy
                                    State: High</span>
                        </div>
                        <div class="flex justify-between items-end">
                            <div class="flex flex-wrap gap-3 mb-4">
                                <span
                                    class="block text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-1">quantite:</span>
                                    <span class="text-ms font-black text-on-surface">{{$service->pivot->quantity}}</span>
                               
                            </div>
                            <div class="text-right">
                                <span
                                    class="block text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-1">Unit
                                    Price</span>
                                <span class="text-2xl font-black text-on-surface">{{$service->price." "}}MAD</span>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
                <!-- Service Card 2 -->
                
            </div> 
            <!-- Summary Sidebar --> 
            <aside class="lg:sticky lg:top-28 space-y-6">
                <div
                    class="bg-surface-container-low p-8 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.06)] border border-white/50">
                    <h2 class="text-2xl font-extrabold tracking-tight text-on-surface mb-6">Order Summary</h2>
                    <div class="space-y-4 mb-8">
                        {{-- <div class="flex justify-between text-on-surface-variant font-medium">
                            <span>Subtotal</span>
                            <span class="text-on-surface font-bold">$7,049.00</span>
                        </div>
                        <div class="flex justify-between text-on-surface-variant font-medium">
                            <span>Estimated Taxes</span>
                            <span class="text-on-surface font-bold">$422.94</span>
                        </div>
                        <div class="flex justify-between text-on-surface-variant font-medium">
                            <span>Incentive Rebate (10%)</span>
                            <span class="text-tertiary font-bold">-$704.90</span>
                        </div> --}}
                        <div class="pt-4 border-t border-outline-variant/30">
                            <div class="flex justify-between items-baseline">
                                <span class="text-lg font-bold text-on-surface">Total Price</span>
                                <span class="text-3xl font-black text-primary">{{$order->total_price." "}}MAD</span>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('orders.store',$order)}}" method="POST">
                        @csrf
                    <button type="submit"
                        class="w-full py-4 bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold rounded-lg shadow-lg shadow-orange-600/20 active:scale-95 transition-all mb-4">
                        Confirmer
                    </button>
                    </form>
                    <div class="flex items-center gap-3 justify-center text-on-surface-variant text-sm">
                        <span class="material-symbols-outlined text-sm">verified_user</span>
                        <span>Secure SSL encrypted payment</span>
                    </div>
                </div>
                <div class="flex bg-primary-fixed p-6 rounded-xl">
                  
                    <a href= "{{ route('services.index') }}"
                        class="w-[100%] py-2 bg-surface-container-lowest text-center text-primary font-bold rounded-lg text-sm transition-colors hover:bg-white">
                    Ajouter un service
                    </a>
                </div>
            </aside>
        </div>
           @else
            <div class="mb-10 items-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">Selected Services</h1>
            <p class="text-on-surface-variant font-medium">Aucun service sur la cart!</p>
             
            </div>
            
            <a href= "{{ route('services.index') }}"
                        class="w-[100%] py-2 bg-surface-container-lowest text-center text-primary font-bold rounded-lg text-sm transition-colors hover:bg-white">
                    Reteur choisi un service
                    </a>
           @endif
           
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-8 pt-4 bg-white/90 dark:bg-slate-900/90 backdrop-blur-2xl z-50 rounded-t-3xl shadow-[0_-8px_32px_rgba(18,28,40,0.04)]">
        <div
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-orange-500 transition-colors active:scale-90 duration-150">
            <span class="material-symbols-outlined">home</span>
            <span class="font-['Inter'] text-[11px] font-medium uppercase tracking-wider mt-1">Home</span>
        </div>
        <div
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-orange-500 transition-colors active:scale-90 duration-150">
            <span class="material-symbols-outùned">search</span>
            <span class="font-['Inter'] text-[11px] font-medium uppercase tracking-wider mt-1">Explore</span>
        </div>
        <div
            class="flex flex-col items-center justify-center bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-2xl px-5 py-2 active:scale-90 duration-150">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">shopping_bag</span>
            <span class="font-['Inter'] text-[11px] font-medium uppercase tracking-wider mt-1">Cart</span>
        </div>
        <div
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-orange-500 transition-colors active:scale-90 duration-150">
            <span class="material-symbols-outlined">person</span>
            <span class="font-['Inter'] text-[11px] font-medium uppercase tracking-wider mt-1">Profile</span>
        </div>
    </nav>
</body>

</html>
