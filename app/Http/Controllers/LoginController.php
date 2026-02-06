<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function create(Request $request)
    {
      
     
    //    return view('');
      
    }
    
   public function store(Request $request)
   { 
      $valid = $request->validate([
        'email' => 'email',
        'password' => 'required|string|min:3'
      ]);
     if(Auth::attempt($valid)){
         var_dump($valid);
        $request->session()->regenerate();
        // return redirect()->route('home')->with('succer','welkom back!');
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
        //   return redirect()->route('home');
      
    }
}
