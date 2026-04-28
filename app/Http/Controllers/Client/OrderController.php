<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use function PHPUnit\Framework\returnSelf;

class OrderController extends Controller
{
     public function index() 
     {
          $orders = Auth::user()->clientOrders()->with('services','prestataire.user')->paginate(4);
          
          return view('client.orders',compact('orders'));

     } 

     public function store(Order $order) 
     {
          $order->update([
              'status'=> OrderStatus::PENDIGN
          ]);
         return redirect()->route('client.services.index');
     } 

     public function destroy(Order $order) 
     {
        $order->delete();
        return back();
     } 
}
