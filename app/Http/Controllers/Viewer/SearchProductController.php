<?php

namespace App\Http\Controllers\Viewer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;


class SearchProductController extends Controller
{

    public function index(Request $request)
    {
        // if($request->id_subcategory!= null||$request->id_indonesia_province != null){

        //     if($request->id_subcategory != null AND $request->id_indonesia_province != null){

        //         $search = Product::search($request->search)
        //         ->where('id_indonesia_province', $request->id_indonesia_province)
        //         ->where('id_subcategory', $request->id_subcategory)
        //         ->get();

        //     } elseif($request->id_indonesia_province != null && $request->id_subcategory == null){

        //         $search = Product::search($request->search)
        //         ->where('id_indonesia_province', $request->id_indonesia_province)->get();
    
        //     } elseif($request->id_indonesia_province == null && $request->id_subcategory!= null){

        //         $search = Product::search($request->search)
        //         ->where('id_subcategory', $request->id_subcategory)->get();
    
        //     } 

        // } elseif ($request->id_subcategory == null && $request->id_indonesia_province == null){

        //     $search = Product::with('company','subcategory','IndonesiaCity','IndonesiaProvince')->get();

        //     if($request->filled('search')){

        //         $search = Product::search($request->search)->get();
    
        //     } 

        // } else{

        //     $search = Product::with('company','subcategory','IndonesiaCity','IndonesiaProvince')->get(); 

        $search = Product::with(['company','subcategory','IndonesiaCity','IndonesiaProvince']);
        if ($request->id_subcategory != null){
            $search = $search->where('id_subcategory',$request->id_subcategory); 
        }

        if ($request->id_indonesia_province != null){
            $search = $search->where('id_indonesia_province',$request->id_indonesia_province);
        }

        $search->get();
        return view ('/home/categoryproduct', compact('search'));
    }
}
