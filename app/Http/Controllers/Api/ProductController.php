<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;

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

            return response()->json([
                'code' => 200,
                'status' => true,
                'message' => "Success get the product",
                'data' => $product
            ]);
        }else{

            $product = Product::with('company','subcategory','IndonesiaCity','IndonesiaProvince')->get();

            return response()->json([
                'code' => 200,
                'status' => true,
                'message' => "Success get all products",
                'data' => $product
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
        if ($file = $request->file('product_pict')) {
            
            $upload = $request->file('product_pict');
            $this->validate($request, [
                'product_pict'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/product';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

            $product = Product::create([
                'id' => $request->id,
                'name' => $request->name,
                'product_pict' => $image,
                'desc' => $request->desc,
                'hs_code' => $request->hs_code,
                'dimension' => $request->dimension,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'id_company' => $request->id_company,
                
            ]);

            if (!$product) {
                // return $this->sendError("", "failed create the product");
            }
            
        } else {
            $product = Product::create([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'hs_code' => $request->hs_code,
                'dimension' => $request->dimension,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'id_company' => $request->id_company,
            ]);

            if (!$product) {
                // return $this->sendError("", "failed create the product");
            }
        }

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
        $product = Product::with('company','subcategory','indonesiacity','indonesiaprovince')->find($product->id);

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
        if ($file = $request->file('product_pict')) {
            
            if(File::exists(public_path('product/'.$product->product_pict))){

                File::delete(public_path('product/'.$product->product_pict));
    
            }

            $upload = $request->file('product_pict');
            $this->validate($request, [
                'product_pict'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/product';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

            $product->update([
                'id' => $request->id,
                'name' => $request->name,
                'product_pict' => $image,
                'desc' => $request->desc,
                'hs_code' => $request->hs_code,
                'dimension' => $request->dimension,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'id_company' => $request->id_company,
            ]);

            if (!$product) {
                // return $this->sendError("", "failed update the product");
            }
            
        } else {
            $product = Product::create([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'hs_code' => $request->hs_code,
                'dimension' => $request->dimension,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'id_company' => $request->id_company,
            ]);

            if (!$product) {
                // return $this->sendError("", "failed update the product");
            }
        }

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
        $product = Product::find($product->id);
        
        if(File::exists(public_path('product/'.$product->product_pict))){

            File::delete(public_path('product/'.$product->product_pict));
            
            $product->delete();

        } else{

            $product->delete();

        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success delete the product",
            'data' => ""
        ]);
    }
}
