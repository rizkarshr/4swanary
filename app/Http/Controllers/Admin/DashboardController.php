<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Company;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [

            'user' => User::all()->count(),
            'company' => Company::all()->count(),
            'product' => Product::all()->count(),

        ];

        return view('/dashboard', compact('data'));
    }

}
