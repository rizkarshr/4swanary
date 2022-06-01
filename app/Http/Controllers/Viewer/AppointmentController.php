<?php

namespace App\Http\Controllers\Viewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class AppointmentController extends Controller
{

    public function mail(Request $request) {
                 
        Mail::to($request->input('email'))->send(new SendMail());

        return view ('/home/categoryumkm', compact('search'));
     }

    
}
