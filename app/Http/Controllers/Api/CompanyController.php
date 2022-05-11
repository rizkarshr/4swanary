<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Subcategory;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get all company",
            'data' => $company
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
        $company = Company::create([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success create the company",
            'data' => $company
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //$company = Company::with('item')->find($company->id);
        $company = Company::all();

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get the company",
            'data' => $company
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
    public function update(Request $request, Company $company)
    {
        $company->update([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success update the company",
            'data' => $company
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success delete the company",
            'data' => ""
        ]);
    }
}
