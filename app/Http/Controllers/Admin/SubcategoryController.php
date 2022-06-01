<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->filled('search')){

            $subcategory = Subcategory::search($request->search)->get();

        }else{

            $subcategory = Subcategory::with('category')->get();

        }

        return view('subcategory', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = Subcategory::create([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
            'id_category' => $request->id_category,
        ]);

        return redirect('/admin/manage-subcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        $subcategory = Subcategory::with('category')->find($subcategory->id);
        
        return view('subcategory', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $subcategory = Subcategory::with('category')->find($subcategory->id);
        
        return view('subcategory', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $subcategory->update([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
            'id_category' => $request->id_category,
        ]);

        return redirect('/admin/manage-subcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();

        return redirect('/admin/manage-subcategory');
    }
}