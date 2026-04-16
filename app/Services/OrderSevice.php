<?php

use App\Models\Order;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderSevice 
{
     public function addCard(Service $service)
     {

         $order = Order::firstOrCreate([
          'client_id' => Auth::user()->id,
          'status' => 'cart'
        ]);

       $order->services()->syncWithoutDetaching([
           $service->id => [
          'quantity' => DB::raw('quantity + 1'),
           'price' => $service->price
        ]
       ]);

     $order->total_price = $order->services->sum(function ($service){
       return $service->pivot->price * $service->pivot->quantity;
      });

      $order->save();
     }

}