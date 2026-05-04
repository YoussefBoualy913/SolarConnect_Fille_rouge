<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AdminStatsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

   public function index(AdminStatsService $adminStatsService)
   {
       $stats = $adminStatsService->getStats();
      $prestataires  = User::with('prestataire.documents')->where('role','prestataire')
      ->whereHas('prestataire',function ($q) {
        $q->where('type','pending');
      })->paginate(5);

      $user = Auth::user();

      return view('admin.dashboard',compact('prestataires','user','stats'));
   }
}
