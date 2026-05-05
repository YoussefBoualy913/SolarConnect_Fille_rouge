<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function create(Request $request)
    {
      
       return view('visiteur.login');
      
    }
    
   public function store(Request $request)
   { 
      $valid = $request->validate([
        'email' => 'email',
        'password' => 'required|string|min:6'
      ]);
     
     if(Auth::attempt($valid)){
    
        $request->session()->regenerate();
        if (Auth::user()->role->value === 'prestataire') {

            if(Auth::user()->prestataire->type === "pending")
              {
                return redirect()->route('prestataire.attend');
              }
              if(Auth::user()->prestataire->type === "approved")
                {

                  return redirect()->route('prestataire.dashboard')->with('succer','welkom back!');
                }
         }
         if (Auth::user()->role->value === 'client') {
    
           return redirect()->route('client.services.index')->with('succer','welkom back!');
         }
         if (Auth::user()->role->value === 'admin') {
    
           return redirect()->route('admin.dashboard')->with('succer','welkom back!');
         }
     }
     return back()->withErrors([
        'email' => 'Identifiants ou mot de passe incorrects',
    ]);
   }

   
    public function logout(Request $request)
    {
      
          Auth::logout();
          $request->session()->invalidate();     
          $request->session()->regenerateToken();
          return redirect()->route('home');
      
    }
}
