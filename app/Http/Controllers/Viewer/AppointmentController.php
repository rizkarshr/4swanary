<?php

namespace App\Http\Controllers\Viewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;

class AppointmentController extends Controller
{

    public function index($id) {

        $company = Company::with('subcategory','IndonesiaCity','IndonesiaProvince')->find($id);

        return view ('/home/appointment', compact('company'));
    }

    public function mail(Request $request, Company $company) {

        $data = [
            'email_company' => $request->email_company,
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message,
        ];
        
        Mail::to($data['email_company'])->send(new SendMail($data));

        // return redirect('/company/{id}');
        
    }

    
}
