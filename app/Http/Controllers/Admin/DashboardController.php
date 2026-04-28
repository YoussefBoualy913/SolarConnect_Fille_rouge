<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

   public function index()
   {
      $prestataires  = User::with('prestataire.documents')->where('role','prestataire')
      ->whereHas('prestataire',function ($q) {
        $q->where('status','pending');
      })->paginate(5);

      $user = Auth::user();

      return view('admin.dashboard',compact('prestataires','user'));
   }
}
