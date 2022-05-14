<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Company;
use App\Models\Subcategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->filled('search')){

            $product = Product::search($request->search)->get();

        }else{

            $product = Product::all();

        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get all product",
            'data' => $product
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
        $product = Product::create([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success create the product",
            'data' => $product
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //$product = Product::with('item')->find($product->id);
        $product = Product::all();

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get the Product",
            'data' => $product
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
    public function update(Request $request, Product $product)
    {
        $product->update([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success update the product",
            'data' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success delete the product",
            'data' => ""
        ]);
    }
}
