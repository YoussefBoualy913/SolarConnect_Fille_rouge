<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function index() 
     {
         $services = Service::with('prestataire.user','category')->paginate(4);
         return view('client.services',compact('services'));
     } 
     
    public function show(Service $service)
     {
         return view('client.service',compact('service'));
     } 
}
