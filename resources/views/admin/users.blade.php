@extends('layouts.admin')

@section('title')
SolarConnect - Gestion des Utilisateurs
@endsection

@section('content')

        <!-- Content Canvas -->
        <div class="p-10 bg-surface-container-low min-h-[calc(100vh-64px) ]">
            <!-- Hero Header Section -->
            <div class="mb-12 flex justify-between items-end flex-wrap gap-6">
                <div>
                    <span class="inline-block py-1 px-3 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase tracking-widest rounded-full mb-3">Gestion des comptes</span>
                    <h2 class="font-headline font-black text-4xl tracking-tighter text-on-surface">Utilisateurs</h2>
                    <p class="text-on-surface-variant mt-2 max-w-md">Consultez, bannissez ou réactivez les utilisateurs de la plateforme SolarConnect.</p>
                </div>
                <div class="flex gap-2">
                    <div class="bg-surface-container-high/60 rounded-full px-4 py-2 text-sm font-semibold text-on-surface-variant flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-base">people</span>
                        <span>{{ $users->total() }} utilisateurs</span>
                    </div>
                </div>
            </div>
             <div class="flex items-center mb-4 gap-4">
                <div class="relative group ">
                    <form action="{{ route('admin.users.index') }}"" class="flex gap-4" method="GET">
                        
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none" data-icon="search">search</span>
                    <input  name="search" value="{{ $search }}" class="bg-surface-container-low border-none rounded-xl pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/20 w-64 transition-all" placeholder="Rechercher un utilisateur..." type="text" />
                    <button type="submit"  class="bg-surface-container-high/60 rounded-full px-4 py-2 text-sm font-semibold text-on-surface-variant flex items-center gap-2">
                        Rechercher
                    </button>
                    </form>
                </div>
            </div>
            <!-- Tableau des utilisateurs - Version statique HTML/CSS pur sans JS -->
            <div class="bg-surface-container-lowest rounded-2xl shadow-md overflow-hidden border border-outline-variant/30">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-high">
                            <tr>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Utilisateur</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Email</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Rôle</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">Statut</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Page 1 : Utilisateurs 1 à 5 -->
                            <!-- Ligne 1 - Sophie Martin (Actif) -->
                            @foreach ($users as  $user)
                                
                            <tr class="user-row border-b border-outline-variant/20 hover:bg-surface-container-low/60 transition">
                                <td class="px-6 py-4 font-medium text-on-surface">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary text-sm">person</span>
                                        </div>
                                        {{ $user->first_name." ".$user->last_name }}
                                    </div>
                                </td>
                                <td class="text-on-surface-variant">{{ $user->email }}</td>
                                <td><span class="inline-block px-2 py-1 rounded-md bg-surface-container-high text-xs font-semibold">{{$user->role}}</span></td>

                                <td>
                                    @if ($user->status === "active")
                                        
                                    <span class="badge-active"><span class="material-symbols-outlined text-xs">check_circle</span> Actif</span>
                                   @else
                                   <span class="badge-banned"><span class="material-symbols-outlined text-xs">gavel</span> Banni</span>
                                    @endif
                                </td>
                                @if ($user->status === "active")
                                  
                                      <td class="text-center">
                                        @if ($user->role->value === "admin")
                                            
                                        <span class="material-symbols-outlined text-sm">_</span>
                                        @else
                                        <form action="{{ route('admin.banni',$user) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                        <button type="submit" class="btn-ban px-3 py-1.5 rounded-lg text-xs font-bold flex items-center gap-1 mx-auto"><span class="material-symbols-outlined text-sm">block</span> Bannir</button>
                                        </form>
                                        @endif
                                    </td>
                                @endif
                                @if ($user->status === "inactive")
                                    <form action="{{ route('admin.debanni',$user) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                <td class="text-center"><button type="submit" class="btn-unban px-3 py-1.5 rounded-lg text-xs font-bold flex items-center gap-1 mx-auto"><span class="material-symbols-outlined text-sm">restore_from_trash</span> Débannir</button></td>
                                </form>
                                @endif
                            </tr>
                            @endforeach
                        
                            
                            
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-5 border-t border-outline-variant/20 bg-surface-container-low/40  justify-between items-center flex-wrap ">
                {{ $users->links() }}
                </div>
               
            </div>

          
        </div>
@endsection