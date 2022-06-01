<?php

namespace App\Http\Controllers\Viewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;

class SearchUMKMController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->id_subcategory!= null||$request->id_indonesia_province != null){

            if($request->id_subcategory != null AND $request->id_indonesia_province != null){

                $search = Company::search($request->search)
                ->where('id_indonesia_province', $request->id_indonesia_province)
                ->where('id_subcategory', $request->id_subcategory)
                ->get();

            } elseif($request->id_indonesia_province != null && $request->id_subcategory == null){

                $search = Company::search($request->search)
                ->where('id_indonesia_province', $request->id_indonesia_province)->get();
    
            } elseif($request->id_indonesia_province == null && $request->id_subcategory!= null){

                $search = Company::search($request->search)
                ->where('id_subcategory', $request->id_subcategory)->get();
    
            } 

        } elseif ($request->id_subcategory == null && $request->id_indonesia_province == null){

            $search = Company::with('subcategory','IndonesiaCity','IndonesiaProvince')->get();

            if($request->filled('search')){

                $search = Company  ::search($request->search)->get();
    
            } 

        } else{

            $search = Company::with('subcategory','IndonesiaCity','IndonesiaProvince')->get();

        }

        // if( $search->count() == 0){
                    
        //     return response()->json([
        //         'code' => 200,
        //         'status' => true,
        //         'message' => "Company not found",
        //         'data' => ''
        //     ]);
        // }

        return view ('/home/categoryumkm', compact('search'));
    }
}
