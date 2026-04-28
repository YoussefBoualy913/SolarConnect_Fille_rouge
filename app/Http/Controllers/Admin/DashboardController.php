<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserStatsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

   public function index(UserStatsService $statsService)
   {
       $stats = $statsService->getStats();
      $prestataires  = User::with('prestataire.documents')->where('role','prestataire')
      ->whereHas('prestataire',function ($q) {
        $q->where('status','pending');
      })->paginate(5);

      $user = Auth::user();

      return view('admin.dashboard',compact('prestataires','user','stats'));
   }
}
