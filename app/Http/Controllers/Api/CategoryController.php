<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index(Request $request)
    {
        if($request->filled('search')){

            $category = Category::search($request->search)->get();

            return response()->json([
                'code' => 200,
                'status' => true,
                'message' => "Success get the category",
                'data' => $category
            ]);

        }else{

            $category = Category::all();

            return response()->json([
                'code' => 200,
                'status' => true,
                'message' => "Success get all categories",
                'data' => $category
            ]);

        }

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
        $category = Category::create([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success create the category",
            'data' => $category
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //$category = Category::with('item')->find($category->id);
        $category = Category::find($category->id); 

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get the category",
            'data' => $category
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
    public function update(Request $request, Category $category)
    {
        $category->update([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success update the category",
            'data' => $category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success delete the category",
            'data' => ""
        ]);
    }
}
