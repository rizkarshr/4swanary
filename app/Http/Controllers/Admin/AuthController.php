<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    
    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();

        $email_db = $data->email;
        $password_db = $data->password;

        if ($email == $email_db and (Hash::check($password, $password_db))) {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
                'status' => 'Active'
            ]);

            if (Auth::attempt($credentials)) {
            
                $request->session()->regenerate();
     
                return redirect()->intended('admin/dashboard');
     
            }

        }   

        return back()->with('loginError','Login Failed');

    }


    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
