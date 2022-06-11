<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
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
        if ($request->filled('search')) {

            $company = Company::search($request->search)->get();
        } else {

            $company = Company::with('subcategory', 'IndonesiaCity', 'IndonesiaProvince')->get();
        }

        return view('company', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategory = Subcategory::with('category')->where('id_category', '1')->get();
        $province = IndonesiaProvince::all();
        $city = IndonesiaCity::with('IndonesiaProvince')->get();

        return view('crud/createcompany', compact('subcategory', 'province', 'city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // // $company = company::find($id);
        $code = $this->generateUniqueCode();
        $code2 = $this->generateUniqueCode2();

        $validator = Validator::make($request->all(), [
            'logo' => '|mimes:jpg,jpeg,png,gif|max:2048',
            'background' => '|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        if ($file = $request->file('logo')) {

            $upload = $request->file('logo');
            $penyimpanan = public_path() . '/company-logo';
            $upload->move($penyimpanan, $code . '.' . $upload->getClientOriginalExtension());
            $image1 = $code . '.' . $upload->getClientOriginalExtension();
        }

        if ($file = $request->file('background')) {

            $upload2 = $request->file('background');
            $penyimpanan2 = public_path() . '/company-bg';
            $upload2->move($penyimpanan2, $code2 . '.' . $upload2->getClientOriginalExtension());
            $image2 = $code2 . '.' . $upload2->getClientOriginalExtension();
        }

        if ($file = $request->file('logo') and $file = $request->file('background')) {

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'logo' => $image1,
                'background' => $image2,
                'since' => $request->since,
                'website' => $request->website,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ]);
        } elseif ($file = $request->file('logo')) {

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'logo' => $image1,
                'since' => $request->since,
                'website' => $request->website,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ]);
        } elseif ($file = $request->file('background')) {

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'background' => $image2,
                'since' => $request->since,
                'website' => $request->website,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ]);
        } else {

            $company = Company::create([
                'id' => $request->id,
                'name' => $request->name,
                'since' => $request->since,
                'website' => $request->website,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ]);

        }

        return redirect('/admin/manage-company')->with('success', 'Company data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Company $company)
    // {
    //     $company = Company::with('subcategory','IndonesiaCity','IndonesiaProvince')->find($company->id);

    //     return view('company', compact('company'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = Subcategory::with('category')->where('id_category', '1')->get();
        $province = IndonesiaProvince::all();
        $city = IndonesiaCity::with('IndonesiaProvince')->get();

        $company = Company::with('subcategory', 'IndonesiaCity', 'IndonesiaProvince')->find($id);

        return view('crud/editcompany', compact('company', 'subcategory', 'province', 'city'));
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
        $company = Company::find($id);
        $code = $this->generateUniqueCode();
        $code2 = $this->generateUniqueCode2();

        $validator = Validator::make($request->all(), [
            'logo' => '|mimes:jpg,jpeg,png,gif|max:2048',
            'background' => '|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        if ($file = $request->file('logo')) {

            if (File::exists(public_path('company-logo/' . $company->logo))) {

                File::delete(public_path('company-logo/' . $company->logo));
            }

            $upload = $request->file('logo');
            $penyimpanan = public_path() . '/company-logo';
            $upload->move($penyimpanan, $code . '.' . $upload->getClientOriginalExtension());
            $image1 = $code . '.' . $upload->getClientOriginalExtension();
        }
        if ($file = $request->file('background')) {

            if (File::exists(public_path('company-bg/' . $company->background))) {

                File::delete(public_path('company-bg/' . $company->background));
            }

            $upload2 = $request->file('background');
            $penyimpanan2 = public_path() . '/company-bg';
            $upload2->move($penyimpanan2, $code2 . '.' . $upload2->getClientOriginalExtension());
            $image2 = $code2 . '.' . $upload2->getClientOriginalExtension();
        }

        if ($file = $request->file('logo') and $file = $request->file('background')) {

            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'logo' => $image1,
                'background' => $image2,
                'since' => $request->since,
                'website' => $request->website,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'updated_at' => $request->updated_at
            ]);

        } elseif ($file = $request->file('logo')) {

            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'logo' => $image1,
                'since' => $request->since,
                'website' => $request->website,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'updated_at' => $request->updated_at
            ]);

        } elseif ($file = $request->file('background')) {

            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'background' => $image2,
                'since' => $request->since,
                'website' => $request->website,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'updated_at' => $request->updated_at
            ]);

        } else {

            $company->update([
                'id' => $request->id,
                'name' => $request->name,
                'since' => $request->since,
                'website' => $request->website,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'id_subcategory' => $request->id_subcategory,
                'id_indonesia_province' => $request->id_indonesia_province,
                'id_indonesia_city' => $request->id_indonesia_city,
                'updated_at' => $request->updated_at
            ]);

        }

        return redirect('/admin/manage-company')->with('success', 'Company data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);

        if (File::exists(public_path('company-logo/' . $company->logo)) and File::exists(public_path('company-bg/' . $company->background))) {

            File::delete(public_path('company-logo/' . $company->logo));
            File::delete(public_path('company-bg/' . $company->background));

            $company->delete();

        } elseif (File::exists(public_path('company-logo/' . $company->logo))) {

            File::delete(public_path('company-logo/' . $company->logo));

            $company->delete();

        } elseif (File::exists(public_path('company-bg/' . $company->background))) {

            File::delete(public_path('company-bg/' . $company->background));

            $company->delete();
            
        } else {

            $company->delete();
        }

        return redirect('/admin/manage-company')->with('success', 'Company data deleted successfully.');
    }

    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Company::where("logo", "=", $code)->first());

        return $code;
    }

    public function generateUniqueCode2()
    {
        do {
            $code2 = random_int(100000, 999999);
        } while (Company::where("background", "=", $code2)->first());

        return $code2;
    }
}
