<?php

namespace App\Services;

use App\Models\User;
use App\Models\Order;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PrestataireStats
{
    public function getStats(): array
    {
       
            $totalRevenue = Order::where('prestataire_id', Auth::user()->prestataire->id)
            ->whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->where('status','finished')
           ->sum('total_price');
           $orderspending = Order::where('prestataire_id', Auth::user()->prestataire->id)
                             ->where('status','pending')
                             ->count();
            $avg = Review::whereHas('service', function ($q) {
                         $q->where('prestataire_id', Auth::user()->prestataire->id);
                         })->avg('rating');

            $note = $avg ? number_format($avg, 2) : 0;

            $Nouveauxleads = Order::whereMonth('created_at', now()->month)
                     ->whereYear('created_at', now()->year)
                     ->where('status','pending')
                     ->distinct('client_id')
                     ->count('client_id');


    return [
            'totalRevenue' =>$totalRevenue,
            'orderspending' =>$orderspending,
            'note' => $note ,
            'Nouveauxleads'=>$Nouveauxleads    

        ];
    }
}