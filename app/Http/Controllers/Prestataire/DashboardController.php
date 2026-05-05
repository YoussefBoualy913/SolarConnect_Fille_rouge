<?php

namespace App\Http\Controllers\Prestataire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\PrestataireStats;

class DashboardController extends Controller
{
    public function index(PrestataireStats $prestataireStats)
    {
        $user = Auth::user();
       $stats = $prestataireStats->getStats();
       
        return view('prestataire.dashboard',compact('user','stats'));
    }
    public function attend()  
    {
        return view('prestataire.attend');
        
        
    }
}
