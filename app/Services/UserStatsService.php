<?php

namespace App\Services;

use App\Models\Service;
use App\Models\User;

class UserStatsService
{
    public function getStats(): array
    {
        return [
            'clients' => User::where('role', 'client')->count(),

           'prestataires' => User::where('role', 'prestataire')
           ->whereHas('prestataire', function ($q) {
            $q->where('status', 'approved');
           })->count(),

            'services' => Service::where('status', 'active')->count(),
        ];
    }
}