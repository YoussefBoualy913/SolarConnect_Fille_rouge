<?php

namespace App\Http\Controllers\Prestataire;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePrestataireRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user()->load('prestataire.documents');
        return view('prestataire.profile',compact('user'));
    }

     public function update(UpdatePrestataireRequest $updatePrestataireRequest)
    {
       
       $updatePrestataireRequest->validated();
      
    }
}
