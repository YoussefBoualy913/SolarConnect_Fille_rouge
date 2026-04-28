<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\StorePrestataireRequest;
use App\Models\User;
use App\Services\RegisterRrestataireService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
      return view('visiteur.register');
    }

    public function registerClient(StoreClientRequest $request)
    {
       $validated = $request->validated();
       $user = User::create($validated);
      Auth::login($user);
     return redirect()->route('login');
    }

      public function registerPrestataire(StorePrestataireRequest $request,RegisterRrestataireService $registerPrestataireService)
    {
      $registerPrestataireService->registerPrestataire($request);
   
     return redirect()->route('login');
    }
}
