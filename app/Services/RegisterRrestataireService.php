<?php

namespace App\Services;

use App\Http\Requests\StorePrestataireRequest;
use App\Models\Document;
use App\Models\Prestataire;
use App\Models\User;
use App\UserRole;
use Illuminate\Support\Facades\DB;

class RegisterRrestataireService
{
    public function registerPrestataire(StorePrestataireRequest $request)
    {
          $validated = $request->validated();
     DB::transaction(function () use ($request,$validated) {

      
        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name'  => $validated['last_name'],
            'ville'  => $validated['ville'],
            'phone'  => $validated['phone'],
            'email'      => $validated['email'],
            'password'   => $validated['password'],
            'role' => UserRole::PRESTATAIRE
        ]);

       
        $prestataire = Prestataire::create([
            'user_id' => $user->id,
            'company_name' => $validated['company_name'] ?? null,
        ]);

       
        $cinPath = $request->file('cin')->store('documents/cin');
        $certPath = $request->file('certification')->store('documents/certifications');

       
        Document::create([
            'prestataire_id' => $prestataire->id,
            'cin_path' => $cinPath,
            'certificat_path' => $certPath
        ]);
    });

    //  dd($user);
      // Auth::login($user);
    }
}