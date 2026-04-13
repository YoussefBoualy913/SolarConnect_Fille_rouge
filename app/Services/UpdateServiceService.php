<?php

namespace App\Services;

use App\Http\Requests\StoreserviceRequest;
use App\Http\Requests\UpdateserviceRequest;
use App\Models\Service;
use Exception;
use Illuminate\Support\Facades\Auth;

class UpdateServiceService
{
    public function store(UpdateServiceRequest $updateserviceRequest,$service)
    {
        $updateserviceRequest->validated();

       
        $durationInMinutes = match($updateserviceRequest->duration_unit) {
          'minutes' => $updateserviceRequest->duration_value,
          'hours' => $updateserviceRequest->duration_value * 60,
          'days' => $updateserviceRequest->duration_value * 1440,
           default => throw new Exception('Invalid duration unit'),
        };
      if($updateserviceRequest->file('image')){
      $path = $updateserviceRequest->file('image')->store('services', 'public');
      }
    

      $service->update([
           'title' => $updateserviceRequest->title,
           'description' => $updateserviceRequest->description,
           'price' => $updateserviceRequest->price,
           'duree' => $durationInMinutes,
           'image_url' => $path ?? null,
      ]);
    }
}