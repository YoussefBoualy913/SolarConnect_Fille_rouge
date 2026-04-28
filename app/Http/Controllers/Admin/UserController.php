<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\PrestataireStatus;
use App\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

use function Whoops\Example\bar;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {

   
    $search = trim($request->input('search'));

    $users = User::query()
        ->when($search, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        })
        ->paginate(3)
        ->withQueryString();

    return view('admin.users', compact('users', 'search'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function approuver(User $user)
    {
        $user = $user->load('prestataire');
        $prestataire = $user->prestataire;

        $prestataire->update(
            [
                'status'=>PrestataireStatus::APPROVED
            ]
        );

        return back();
    }

     public function rejecter(User $user)
    {
        $user = $user->load('prestataire');
        $prestataire = $user->prestataire;

        $prestataire->update(
            [
                'status'=>PrestataireStatus::REJECTED
            ]
        );

        return back();
    }

    public function banni(User $user) 
     {
      
        if($user->role->value === "admin" || Auth::user()->role->value != "admin")
            {
                return redirect()->back()->with('message','vous ne peux pas fait cette instruction');
            } 
        $user->update([
            'status'=> UserStatus::INACTIVE
        ]);
        return redirect()->back()->with('message','user banni avec succer');
    }

    public function debanni(User $user)
     {
          if($user->role->value === "admin" || Auth::user()->role->value != "admin")
            {
                return redirect()->back()->with('message','vous ne peux pas fait cette instruction');
            } 
        $user->update([
            'status'=> UserStatus::ACTIVE
        ]);  

        return redirect()->back()->with('message','user banni avec succer');
    }
}
