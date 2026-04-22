<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    
public function showCin(User $prestataire)
{

    
    
    // if (auth()->id() !== $prestataire->id && !auth()->user()->isAdmin()) {
    //     abort(403, 'Accès non autorise');
    // }
    dd($prestataire);
  $user = $prestataire->load('prestataire.documents');
  
  $documents = $user->prestataire?->documents;

    $fullPath = storage_path('app/' . $cin_path);
    
    if (!file_exists($fullPath)) {
        abort(404, 'Fichier non trouve: ' . $fullPath);
    }
    
    return response()->file($fullPath);
}

public function showCertificat(User $prestataire)
{

    
    
    // if (auth()->id() !== $prestataire->id && !auth()->user()->isAdmin()) {
    //     abort(403, 'Accès non autorise');
    // }
    
    $path = storage_path('app/' . $prestataire->certificat_path);
    
    if (!file_exists($path)) {
        abort(404, 'Document non trouve');
    }
  
    return response()->file($path, [
        'Content-Type' => mime_content_type($path),
        'Content-Disposition' => 'inline; filename="'.basename($path).'"'
    ]);
}

}
