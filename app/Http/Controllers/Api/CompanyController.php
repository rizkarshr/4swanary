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
    public function index(Request $request)
    {
        if($request->filled('search')){

            $company = Company::search($request->search)->get();

        }else{

            $company = Company::all();

        }

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
        if ($file = $request->file('logo')) {

            $upload = $request->file('logo');
            $this->validate($request, [
                'logo'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/company-logo';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'logo' => $image,
                'since' => $request->since,
                'subcategory' => $request->subcategory,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                // 'id_origin',
            ]);

            // if (!$company) {
            //     return $this->sendError("", "failed create company");
            // }

        }

        if($file = $request->file('background')){

            $upload = $request->file('background');
            $this->validate($request, [
                'background'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/company-bg';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'background' => $image,
                'since' => $request->since,
                'subcategory' => $request->subcategory,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                // 'id_origin',
            ]);

            // if (!$company) {
            //     return $this->sendError("", "failed create company");
            // }

        } else {

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'since' => $request->since,
                'subcategory' => $request->subcategory,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                // 'id_origin',
            ]);

            // if (!$company) {
            //     return $this->sendError("", "failed create company");
            // }
        } 

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
        if ($file = $request->file('logo')) {

            $upload = $request->file('logo');
            $this->validate($request, [
                'logo'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/company-logo';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'logo' => $image,
                'since' => $request->since,
                'subcategory' => $request->subcategory,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                // 'id_origin',
            ]);

            // if (!$company) {
            //     return $this->sendError("", "failed update company");
            // }

        }

        if($file = $request->file('background')){

            $upload = $request->file('background');
            $this->validate($request, [
                'background'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/company-bg';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'background' => $image,
                'since' => $request->since,
                'subcategory' => $request->subcategory,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                // 'id_origin',
            ]);

            // if (!$company) {
            //     return $this->sendError("", "failed update company");
            // }
            
        } else {
            
            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'since' => $request->since,
                'subcategory' => $request->subcategory,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                // 'id_origin'
            ]);

            if (!$company) {
                
                // return $this->sendError("", "failed update company");

                return response()->json([
                    'code' => 422,
                    'status' => False,
                    'message' => "Failed update the company",
                    'data' => ""
                ]);
            }
        }

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
        $company = company::find($company->id);
        
        if(File::exists(public_path('company-logo/'.$company->logo))){

            File::delete(public_path('company-logo/'.$company->logo));
            
            $company->delete();

        } 
        if(File::exists(public_path('company-bg/'.$company->background))){

            File::delete(public_path('company-bg/'.$company->background));
            
            $company->delete();

        } else{

            $company->delete();

        }
        
        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success delete the company",
            'data' => ""
        ]);
    }
}
