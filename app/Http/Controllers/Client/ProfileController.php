<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
     public function show()
      
     {  
        $user = Auth::user();
         return view('client.profile',compact('user'));
     }

    

    public function update(UpdateClientRequest $request,User $user)
     
    {
        if($user->id != Auth::user()->id)
            {
                abort(403, 'vous ne peux pas cette action');
            }
        $user->update($request->validated());
        return  redirect()->back();
    }
}
