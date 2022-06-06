<?php

namespace App\Http\Controllers\Viewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;

class CompanyProfilController extends Controller
{
    public function show($id)
    {
        $company = Company::with('subcategory','IndonesiaCity','IndonesiaProvince')->find($id);

        $product = Product::with('company','subcategory','IndonesiaCity','IndonesiaProvince')
        ->where('id_company','=',$id)->get();

        return view('/home/companyprofile', compact('company','product'));
    }
}
