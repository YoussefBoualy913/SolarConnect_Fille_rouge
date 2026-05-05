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
        
         if (!$order->prestataire_id) {
            $order->prestataire_id = $service->prestataire_id;
            $order->save();
         }


    if ($order->prestataire_id !== $service->prestataire_id) {
          return  back()->withErrors([
             'error' => 'Vous ne pouvez pas ajouter des services de différents prestataires.'
         ]);
     }

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

  public function removeCard($userId,$service)
  {

   
   return DB::transaction(function () use ($userId, $service) {

        $order = Order::where('client_id', $userId)
            ->where('status', 'cart')
            ->firstOrFail();

         $service = $order->services()
            ->where('service_id', $service->id)
            ->firstOrFail();

      
        if ($service->pivot->quantity > 1) {

            $order->services()->updateExistingPivot($service->id, [
                'quantity' => DB::raw('quantity - 1')
            ]);

        } else {

            $order->services()->detach($service->id);
        }

        $total = $order->services()
            ->selectRaw('SUM(order_items.price * order_items.quantity) as total')
            ->value('total') ?? 0;

        $order->update(['total_price' => $total]);

        return $order;
    });
     

  }
}