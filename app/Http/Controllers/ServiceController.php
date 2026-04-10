<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreserviceRequest;
use App\Http\Requests\UpdateserviceRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $services = Service::all();
        // return view('service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreserviceRequest $request)
    {
        $data = $request->validated();
        Service::create($data);
    // redirect()->route('service.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //return view('service.show',compacte('servise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //return view('service.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateserviceRequest $request, Service $service)
    {
         $data = $request->validated();
        $service->update($data);
    // redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        // redirect()->route('service.index');
    }
}
