<?php

namespace App\Services;

use App\Http\Requests\StoreserviceRequest;
use App\Models\Service;
use Exception;
use Illuminate\Support\Facades\Auth;

class StoreServiceService
{
    public function store(StoreserviceRequest $storeserviceRequest)
    {
        $storeserviceRequest->validated();

       
        $durationInMinutes = match($storeserviceRequest->duration_unit) {
          'minutes' => $storeserviceRequest->duration_value,
          'hours' => $storeserviceRequest->duration_value * 60,
          'days' => $storeserviceRequest->duration_value * 1440,
           default => throw new Exception('Invalid duration unit'),
        };

      $path = $storeserviceRequest->file('image')->store('services', 'public');
     $prestataire = Auth::user()->prestataire;

      Service::create([
           'title' => $storeserviceRequest->title,
           'description' => $storeserviceRequest->description,
           'price' => $storeserviceRequest->price,
           'category_id' => $storeserviceRequest->category_id,
           'prestataire_id' => $prestataire->id,
           'duree' => $durationInMinutes,
           'image_url' => $path,
      ]);
    }
}