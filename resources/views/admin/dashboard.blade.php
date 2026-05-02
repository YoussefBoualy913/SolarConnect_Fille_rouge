@extends('layouts.admin')

 

@section('content')
    <div class="p-8 space-y-8">
        <!-- Header Section -->
        <section class="flex justify-between items-end">
            <div>
                <h2 class="font-headline text-3xl font-black tracking-tight text-on-surface">Vue d'ensemble</h2>
                <p class="text-on-surface-variant mt-1">Bienvenue dans votre console de gestion énergétique.</p>
            </div>
            <div class="flex gap-3">
                <button class="bg-surface-container-high px-6 py-2.5 rounded-xl text-primary font-semibold text-sm hover:bg-orange-50 transition-colors">Exporter</button>
               
            </div>
        </section>

        <!-- KPI Cards -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] hover:shadow-lg transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-orange-50 rounded-lg text-primary group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" data-icon="payments" style="font-variation-settings: 'FILL' 1;">payments</span>
                    </div>
                    <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-md">+12.5%</span>
                </div>
                <p class="text-sm font-medium text-on-surface-variant">Services actif</p>
                <h3 class="font-headline text-2xl font-black text-on-surface mt-1">{{$stats['services']}}</h3>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] hover:shadow-lg transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-blue-50 rounded-lg text-blue-600 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" data-icon="person_add" style="font-variation-settings: 'FILL' 1;">person_add</span>
                    </div>
                    <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-md">+8.2%</span>
                </div>
                <p class="text-sm font-medium text-on-surface-variant">Nouveaux Utilisateurs</p>
                <h3 class="font-headline text-2xl font-black text-on-surface mt-1">{{$prestataires->total()}}</h3>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] hover:shadow-lg transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-tertiary-container/20 rounded-lg text-tertiary group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" data-icon="engineering" style="font-variation-settings: 'FILL' 1;">engineering</span>
                    </div>
                    <span class="text-xs font-bold text-on-surface-variant bg-slate-100 px-2 py-1 rounded-md">Stable</span>
                </div>
                <p class="text-sm font-medium text-on-surface-variant">Prestataires Actifs</p>
                <h3 class="font-headline text-2xl font-black text-on-surface mt-1">{{$stats['prestataires']}}</h3>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)] hover:shadow-lg transition-all group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-purple-50 rounded-lg text-purple-600 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" data-icon="ads_click" style="font-variation-settings: 'FILL' 1;">ads_click</span>
                    </div>
                    <span class="text-xs font-bold text-error bg-error-container px-2 py-1 rounded-md"></span>
                </div>
                <p class="text-sm font-medium text-on-surface-variant">Clients</p>
                <h3 class="font-headline text-2xl font-black text-on-surface mt-1">{{$stats['clients']}}</h3>
            </div>
        </section>

        <!-- Tableau des prestataires en attente d'approbation (affichage statique HTML/CSS uniquement) -->
        <section class="grid grid-cols-1 gap-8">
            <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_12px_32px_rgba(18,28,40,0.04)]">
                <div class="flex justify-between items-center mb-6 flex-wrap gap-4">
                    <div>
                        <h3 class="font-headline text-xl font-extrabold text-on-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">pending_actions</span>
                            Nouvelles inscriptions prestataires
                        </h3>
                        <p class="text-sm text-on-surface-variant mt-1">Demandes en attente de validation par l'administrateur</p>
                    </div>
                    <div class="bg-error-container/30 px-3 py-1 rounded-full">
                        <span class="text-xs font-black text-error">⚠️ {{ $prestataires->total() }} demandes en attente</span>
                    </div>
                </div>

                <!-- Version tableau (affichage principal) - DONNÉES STATIQUES HTML SANS JS -->
                <div class="overflow-x-auto">
                    <table class="providers-table">
                        <thead>
                            <tr>
                                <th>Prestataire</th>
                                <th>ville</th>
                                <th>Date d'inscription</th>
                                <th>documents</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Prestataire 1 -->

                            @foreach ($prestataires as $prestataire )
                                
                            
                            
                            <tr>
                                <td class="font-semibold text-on-surface">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary text-sm">business</span>
                                        </div>
                                     @if ($prestataire->prestataire->company_name)
                                     {{ $prestataire->prestataire->company_name }}
                                         
                                     @endif
                                     @if (!$prestataire->prestataire->company_name)
                                     {{ $prestataire->first_name }}
                                         
                                     @endif
                                    </div>
                                </td>
                                <td class="text-on-surface-variant">{{$prestataire->ville}}</td>
                                <td class="text-on-surface-variant">{{$prestataire->created_at}}</td>
                                <td>
                                    <a href="{{ route('admin.showCin',$prestataire->id)}}" target="_blank" class="badge-pending" disabled style="opacity:0.6; cursor:allowed;" title="Fonctionnalité disponible avec JavaScript"><span class="material-symbols-outlined">picture_as_pdf</span></a>
                                    <a href="{{ route('admin.showCertificat',$prestataire->id)}}" target="_blank" class="badge-pending" disabled style="opacity:0.6; cursor:allowed;" title="Fonctionnalité disponible avec JavaScript"><span class="material-symbols-outlined">badge</span></a>
                                </td>
                                <td>
                                <form action="{{ route('admin.approuver',$prestataire->id)}}" method="POST">
                                    @csrf
                                <button type="submit" class="btn-approve"  style=" cursor:pointer;" title="Fonctionnalité disponible avec JavaScript">Approuver</button>
                                </form>
                                </td>
                            </tr>
                           
                           @endforeach
                           
                        </tbody>
                    </table>
                </div>

                <!-- Note informatif pour l'admin (sans JS) -->
                <div class="mt-6 pt-4 border-t border-outline-variant/30 text-xs text-on-surface-variant flex items-center justify-between">
                    <div class="flex items-center gap-1">
                       {{ $prestataires->links() }}
                    </div>
                   
                </div>
            </div>
        </section>

       

       
      
    </div>
@endsection
