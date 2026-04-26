<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

   public function index()
   {
      $prestataires  = User::with('prestataire.documents')->where('role','prestataire')
      ->whereHas('prestataire',function ($q) {
        $q->where('status','pending');
      })->get();

      $users = User::all()->where('role','!=','admin');

      return view('admin.dashboard',compact('prestataires','users'));
   }
}
