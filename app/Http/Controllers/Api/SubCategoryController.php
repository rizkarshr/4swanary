<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Subcategory;

class SubCategoryController extends Controller
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

            $subcategory = Subcategory::all();

        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get all subcategory",
            'data' => $subcategory
        ]);
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

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success create the subcategory",
            'data' => $subcategory
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        $subcategory = Subcategory::find($subcategory->id);
        
        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get the subcategory",
            'data' => $subcategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success update the subcategory",
            'data' => $subcategory
        ]);
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

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success delete the subcategory",
            'data' => ""
        ]);
    }
}
