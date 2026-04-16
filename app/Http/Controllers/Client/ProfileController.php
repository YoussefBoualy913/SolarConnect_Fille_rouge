<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
     public function show()
      
     {  
        $user = Auth::user();
         return view('client.profile',compact('user'));
     }

    public function edit() 
    {

    }

    public function update(Request $request)
     
    {
        
    }
}
