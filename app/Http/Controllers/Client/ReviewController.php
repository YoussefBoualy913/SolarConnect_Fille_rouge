<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
     
    public function index() 
    {
     $reviews = Auth::user()->clientReviews()->with('service.prestataire.user')->get();
    $services = Service::whereHas('orders', function ($q) {
        $q->where('client_id', Auth::user()->id);
        $q->where('status', 'finished');
    })
    ->whereDoesntHave('reviews', function ($q) {
        $q->where('client_id', Auth::user()->id);
    })->get();
    
     return view('client.avis',compact('reviews','services'));
    }
   public function store(Request $request ,Service $service)
      {
          $request->validate([
             'comment'=>'required|string|min:3|max:500',
             'rating'=>'required|integer|between:1,5'
          ]);
         Review::create([
           'rating'=>$request->rating,
           'comment'=>$request->comment,
           'service_id'=>$service->id,
           'client_id'=>Auth::user()->id
         ]);
         return redirect()->back()->with('message','rating ajouter avec succer');
      } 
}
