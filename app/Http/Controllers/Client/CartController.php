<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Services\OrderSevice;

class CartController extends Controller
{
    public function index()
     {
        $order = order::with('services')->where('status','cart')->first();
        return view('client.orderCart',compact('order'));
     } 

    public function add(OrderSevice $orderSevice ,Service $service)
     {
       
          $orderSevice->addCard($service);
          return redirect()->route('carts.index');
       
     }

    public function remove(OrderSevice $orderSevice,Service $service) 
    {
       $orderSevice->removeCard(Auth::user()->id,$service);
       return back();
    }

    public function update($serviceId) 
    {
        
    }
}
