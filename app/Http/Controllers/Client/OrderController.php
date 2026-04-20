<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\OrderStatus;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function index() 
     {


     } 

     public function store(Order $order) 
     {
          $order->update([
              'status'=> OrderStatus::PENDIGN
          ]);
         return redirect()->route('services.index');
     } 

     public function show($id) 
     {
        
     } 
}
