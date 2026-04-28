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
            'prestataires' => User::where('role', 'prestataire')->count(),
            'services' => Service::where('status', 'active')->count(),
        ];
    }
}