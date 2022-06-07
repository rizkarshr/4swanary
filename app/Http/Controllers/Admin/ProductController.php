<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\Category;
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
        
        $subcategory = Subcategory::with('category')->where('id_category','1')->get();
        $province = IndonesiaProvince::all();
        $city = IndonesiaCity::with('IndonesiaProvince')->get();
        $company = Company::all();

        // $data = [
        //     'subcategory' => Subcategory::with('category')->where('id_category','1')->get(),
        //     'province' => IndonesiaProvince::all(),
        //     'city' => IndonesiaCity::with('IndonesiaProvince')->get(),
        //     'company' => Company::all(),
        //   

        if($request->filled('search')){

            $product = Product::search($request->search)->with('company', 'subcategory', 'IndonesiaCity', 'IndonesiaProvince')->get();

        } else {

            $product = Product::with('company', 'subcategory', 'IndonesiaCity', 'IndonesiaProvince')->get();
        }

        return view('product', compact('product','subcategory','province','city','company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = [
        //     'subcategory' => Subcategory::with('category')->get(),
        //     'origin' => IndonesiaCity::with('IndonesiaProvince')->get(),
        //     'company' => Company::all(),
        // ];

        $data = Subcategory::with('category')->where('id_category','1')->get();
        

        return view('product', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Product::where("product_pict", "=", $code)->first());
  
        return $code;
    }

    public function store(Request $request)
    {
        
        $code = $this->generateUniqueCode();

        if ($request->file('product_pict') != null) {

            $upload = $request->file('product_pict');
            $this->validate($request, [
                'product_pict' => '|mimes:jpg,jpeg,png,gif,jfif|max:2048',
            ]);
            $penyimpanan = public_path() . '/product';
            $upload->move($penyimpanan,  $code  . '.' . $upload->getClientOriginalExtension());
            $image = $code . '.' . $upload->getClientOriginalExtension();

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
                'created_at'=>$request->created_at,
                'updated_at'=>$request->updated_at
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
                'created_at'=>$request->created_at,
                'updated_at'=>$request->updated_at
            ]);

            if (!$product) {
                // return $this->sendError("", "failed create the product");
            }
        }

        return redirect('/admin/manage-product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        $data = [
            'subcategory' => Subcategory::with('category')->get,
            'origin' => IndonesiaCity::with('IndonesiaProvince')->get,
            'company' => Company::all(),
        ];

        $product = Product::with('company', 'subcategory', 'indonesiacity', 'indonesiaprovince')->find($product->id);

        return view('product', compact('product','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $subcategory = Subcategory::with('category')->where('id_category','1')->get();
        $province = IndonesiaProvince::all();
        $city = IndonesiaCity::with('IndonesiaProvince')->get();
        $company = Company::all();
        
        $product = Product::with('company','subcategory','indonesiacity','indonesiaprovince')->find($product->id);
        

        return view('product', compact('product','subcategory','province','city','company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $code = $this->generateUniqueCode();


        if ($request->file('product_pict') != null) {

            $number = random_int(5);

            if (File::exists(public_path('product/' . $product->product_pict))) {

                File::delete(public_path('product/' . $product->product_pict));
            }

            $upload = $request->file('product_pict');
            $this->validate($request, [
                'product_pict' => '|mimes:jpg,jpeg,png,gif,jfif|max:2048',
            ]);
            $penyimpanan = public_path() . '/product';
            $upload->move($penyimpanan, $code . '.' . $upload->getClientOriginalExtension());
            $image = $code . '.' . $upload->getClientOriginalExtension();

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
                'updated_at'=>$request->updated_at
            ]);

            if (!$product) {
                // return $this->sendError("", "failed update the product");
            }
        } else {
            $product = Product::update([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'hs_code' => $request->hs_code,
                'dimension' => $request->dimension,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'id_company' => $request->id_company,
                'updated_at'=>$request->updated_at
            ]);

            if (!$product) {
                // return $this->sendError("", "failed update the product");
            }
        }

        return redirect('/admin/manage-product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if(isset($product->product_pict)) {          
            
            File::delete(public_path('product/' . $product->product_pict));

        }

            $product->delete();

        return redirect('/admin/manage-product');
    }
}