<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
      return view('visiteur.register');
    }

    public function store(Request $request)
    {
       $validated = $request->validate([
        'name'=> 'required|string|max:50',
        'email'=> 'required|email',
        'password'=> 'required|string|min:5|confirmed',
      ]);
      $user = User::create($validated);
      Auth::login($user);
    //  return redirect()->route('home');
    }
}
