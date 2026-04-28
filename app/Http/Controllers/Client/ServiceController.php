<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function index(Request $request) 
     {
        $search = trim($request->input('search'));
         $services = Service::query()
         ->with('prestataire.user','category')
          ->when($search, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%");
            });
        })
         ->paginate(4);
         return view('client.services',compact('services'));
     } 
     
    public function show(Service $service)
     {
         return view('client.service',compact('service'));
     } 
}
