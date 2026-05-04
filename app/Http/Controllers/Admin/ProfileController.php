<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
     public function show()
      
     {  
        $user = Auth::user();
         return view('admin.profile',compact('user'));
     }

    

    public function update(UpdateAdminRequest $request,User $user)
     
    {
        if($user->id != Auth::user()->id || Auth::user()->role->value != "admin" )
            {
                abort(403, 'vous ne peux pas cette action');
            }
        $user->update($request->validated());
        return  redirect()->back();
    }
}
