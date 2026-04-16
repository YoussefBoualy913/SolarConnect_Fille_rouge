<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use OrderSevice;

class CartController extends Controller
{
    public function index()
     {
        //   $order->load('services');
     } 

    public function add(OrderSevice $orderSevice ,Service $service)
     {
       
          $orderSevice->addCard($service);
       
     }

    public function remove($serviceId) 
    {

    }

    public function update($serviceId) 
    {
        
    }
}
