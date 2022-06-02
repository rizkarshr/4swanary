<?php

namespace App\Http\Controllers\Viewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;

class ProductCatalogController extends Controller
{
    public function show(Product $product)
    {
       $data = [
           
           'product' => Product::with('company','subcategory','indonesiacity','indonesiaprovince')->find($product->id),

           'similiar_product' => Product::with('subcategory')
           ->where('id_subcategory','=',$product->id_subcategory)->get(),
       ];

        return view('home/product-catalog', compact('data'));
        
    }
}
