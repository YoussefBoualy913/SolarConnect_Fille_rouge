<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    
public function showCin(User $user)
{

 
    
    
    // if (auth()->id() !== $prestataire->id && !auth()->user()->isAdmin()) {
    //     abort(403, 'Accès non autorise');
    // }
    
  $user = $user->load('prestataire.documents');
  
  $documents = $user->prestataire?->documents;
  
  foreach($documents as $document)
    {  
        if($document->type === "cin")
            {
                $cin_path = $document->file_path;

            }

    }

    // $fullPath = storage_path('app/' .$cin_path);
    $fullPath = Storage::disk('local')->path($cin_path);
   
    if (!file_exists($fullPath)) {
        dd($fullPath);
        abort(404, 'Fichier non trouve: ' . $fullPath);
    }
    
    return response()->file($fullPath);
}

public function showCertificat(User $user)
{

    
    
    // if (auth()->id() !== $prestataire->id && !auth()->user()->isAdmin()) {
    //     abort(403, 'Accès non autorise');
    // }
    
   $user = $user->load('prestataire.documents');
  
  $documents = $user->prestataire?->documents;
  
  foreach($documents as $document)
    {  
        if($document->type === "certificat")
            {
                $certificat_path = $document->file_path;

            }

    }

   
    $fullPath = Storage::disk('local')->path($certificat_path);
   
    if (!file_exists($fullPath)) {
        dd($fullPath);
        abort(404, 'Fichier non trouve: ' . $fullPath);
    }
    
    return response()->file($fullPath);
}

}
