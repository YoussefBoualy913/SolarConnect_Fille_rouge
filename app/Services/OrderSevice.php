<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderSevice 
{
     public function addCard(Service $service)
     {
         
     DB::transaction(function () use ( $service) {
         $order = Order::firstOrCreate([
          'client_id' => Auth::user()->id,
          'status' => 'cart'
        ]);

       if ($order->services()->where('service_id', $service->id)->exists()) {

           $order->services()->updateExistingPivot($service->id, [
              'quantity' => DB::raw('quantity + 1')
            ]);

        } else {

          $order->services()->attach($service->id, [
               'quantity' => 1,
               'price' => $service->price
           ]);
          }

     $order->total_price = $order->services->sum(function ($service){
       return $service->pivot->price * $service->pivot->quantity;
      });

      $order->save();
      });
  }
}