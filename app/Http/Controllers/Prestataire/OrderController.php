<?php

namespace App\Http\Controllers\Prestataire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Carbon\Carbon;
use App\OrderStatus;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $user = Auth::user();
          $RevenueMensuel = Order::where('prestataire_id', Auth::user()->prestataire->id)
            ->whereYear('created_at', Carbon::now()->year)
           ->sum('total_price');
        $orders = Order::with('client')->where('prestataire_id', Auth::user()->prestataire->id)->get();
       return view('prestataire.comandes',compact('user','RevenueMensuel','orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function accepter(Order $order)
    {
        $order->update([
            'status'=>OrderStatus::CONFIRMED
        ]);
        return  redirect()->back();
    }
    
    public function refuser(Order $order)
    {
        $order->update([
            'status'=>OrderStatus::REJECTED
        ]);
        return  redirect()->back();
    }

    public function terminer(Order $order)
    {
        $order->update([
            'status'=>OrderStatus::FINISHED
        ]);
        return  redirect()->back();
    }

    
}
