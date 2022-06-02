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
    public function show(Company $company, Product $product)
    {
        $data = [

            'company' => Company::with('subcategory','IndonesiaCity','IndonesiaProvince')->find($company->id),
            'product' => Product::with('company','subcategory','IndonesiaCity','IndonesiaProvince')->get(),

        ];

        return view('/home/companyprofile', compact('data'));
    }
}
