<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndonesiaProvince;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->filled('search')){

            $province = IndonesiaProvince::search($request->search)->get();

        }else{

            $province = IndonesiaProvince::all();

        }

        return view('province', compact('province'));
    }
}
