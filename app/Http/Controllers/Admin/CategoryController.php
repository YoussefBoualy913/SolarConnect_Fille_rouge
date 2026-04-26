<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories = Category::all();
    
        return view('admin.categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|min:5'
        ]);

        Category::create([
            'name'=>$request->name
        ]);
    return redirect()->back()->with('success', 'Category creé avec succer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Category $category)
    {
         $request->validate([
            'name'=>'required|string|min:5'
        ]);

        $category->update([
            'name'=>$request->name
        ]);
        return redirect()->back()->with('success', 'Category Mis a jour avec  succer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete(); 
    return redirect()->back()->with('success', 'Category supprimer avec succer');
   }
}
