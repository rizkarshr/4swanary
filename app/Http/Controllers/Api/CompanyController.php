<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->id_subcategory!= null||$request->id_indonesia_province != null){

            if($request->id_subcategory != null AND $request->id_indonesia_province != null){

                $company = Company::search($request->search)
                ->where('id_indonesia_province', $request->id_indonesia_province)
                ->where('id_subcategory', $request->id_subcategory)
                ->get();

            } elseif($request->id_indonesia_province != null && $request->id_subcategory == null){

                $company = Company::search($request->search)
                ->where('id_indonesia_province', $request->id_indonesia_province)->get();
    
            } elseif($request->id_indonesia_province == null && $request->id_subcategory!= null){

                $company = Company::search($request->search)
                ->where('id_subcategory', $request->id_subcategory)->get();
    
            } 

        } elseif ($request->id_subcategory == null && $request->id_indonesia_province == null){

            $company = Company::with('subcategory','IndonesiaCity','IndonesiaProvince')->get();

            if($request->filled('search')){

                $company = Company  ::search($request->search)->get();
    
            } 

        } else{

            $company = Company::with('subcategory','IndonesiaCity','IndonesiaProvince')->get();

        }

        if( $company->count() == 0){
                    
            return response()->json([
                'code' => 200,
                'status' => true,
                'message' => "Company not found",
                'data' => ''
            ]);
        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get all companies",
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
    public function store(Request $request, Company $company)
    {
        $company = company::find($company->id);

        if ($file = $request->file('logo')) {

            $upload = $request->file('logo');
            $this->validate($request, [
                'logo'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/company-logo';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image1 = $request->id.'.'.$upload->getClientOriginalExtension();

        } 
        if($file = $request->file('background')){

            $upload = $request->file('background');
            $this->validate($request, [
                'background'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/company-bg';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image2 = $request->id.'.'.$upload->getClientOriginalExtension();
        } 

        if($file = $request->file('logo') AND $file = $request->file('background')){

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'logo' => $image1,
                'background' => $image2,
                'since' => $request->since,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
            ]);

        } elseif($file = $request->file('logo')){

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'logo' => $image1,
                'since' => $request->since,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
            ]);

        }elseif($file = $request->file('background')){
            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'background' => $image2,
                'since' => $request->since,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
            ]);
        }
        else {

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'since' => $request->since,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
            ]);

            // if (!$company) {
            //     return $this->sendError("", "failed create the company");
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
        $company = Company::with('subcategory','IndonesiaCity','IndonesiaProvince')->find($company->id);

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

            if(File::exists(public_path('company-logo/'.$company->logo))){

                File::delete(public_path('company-logo/'.$company->logo));
    
            }

            $upload = $request->file('logo');
            $this->validate($request, [
                'logo'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/company-logo';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image1 = $request->id.'.'.$upload->getClientOriginalExtension();

        } 
        if($file = $request->file('background')){

            if(File::exists(public_path('company-bg/'.$company->background))){

                File::delete(public_path('company-bg/'.$company->background));
    
            }

            $upload = $request->file('background');
            $this->validate($request, [
                'background'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/company-bg';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image2 = $request->id.'.'.$upload->getClientOriginalExtension();
        } 

        if($file = $request->file('logo') AND $file = $request->file('background')){

            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'logo' => $image1,
                'background' => $image2,
                'since' => $request->since,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
            ]);

            // if (!$company) {
            //     return $this->sendError("", "failed update the company");
            // }

        } elseif($file = $request->file('logo')){

            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'logo' => $image1,
                'since' => $request->since,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
            ]);

            // if (!$company) {
            //     return $this->sendError("", "failed update the company");
            // }

        }elseif($file = $request->file('background')){

            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'background' => $image2,
                'since' => $request->since,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
            ]);

            // if (!$company) {
            //     return $this->sendError("", "failed update the company");
            // }

        } else {
            
            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'desc' => $request->desc,
                'since' => $request->since,
                'website' => $request->website,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
            ]);

            if (!$company) {
                
                // return $this->sendError("", "failed update the company");

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
        
        if(File::exists(public_path('company-logo/'.$company->logo)) AND File::exists(public_path('company-bg/'.$company->background))){

            File::delete(public_path('company-logo/'.$company->logo));
            File::delete(public_path('company-bg/'.$company->background));
            
            $company->delete();

        } elseif(File::exists(public_path('company-logo/'.$company->logo))){

            File::delete(public_path('company-logo/'.$company->logo));
            
            $company->delete();

        } elseif(File::exists(public_path('company-bg/'.$company->background))){

            File::delete(public_path('company-bg/'.$company->background));
            
            $company->delete();
        }
        else{

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
