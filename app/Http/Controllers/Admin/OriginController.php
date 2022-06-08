<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;

class OriginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->filled('search')){

            $city = IndonesiaCity::search($request->search)->get();

        }else{

            $city = IndonesiaCity::with('IndonesiaProvince')->get();

        }

        return view('city', compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $city = IndonesiaCity::create([
        //     'id' => $request->id,
        //     'code' => $request->code,
        //     'province_code' => $request->province_code,
        //     'name' => $request->name,
        //     'meta' => $request->meta,
        // ]);

        // return redirect('/admin/manage-origin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $city = IndonesiaCity::with('IndonesiaProvince')->find($id);

    //     return view('city', compact('city'));
    // }

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
    public function update(Request $request, $id)
    {
        // $city->update([
        //     'id' => $request->id,
        //     'code' => $request->code,
        //     'province_code' => $request->province_code,
        //     'name' => $request->name,
        //     'meta' => $request->meta,
        // ]);

        return redirect('/admin/manage-origin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $city = IndonesiaCity::findOrFail($id);
        // $city->delete();

        // return redirect('/admin/manage-origin');
    }
}