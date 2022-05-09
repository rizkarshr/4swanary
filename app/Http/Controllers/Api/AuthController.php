<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;

use App\Models\User;

class AuthController extends Controller
{
    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'username' => 'required'|'unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        if($validator->fails()) 
        {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 'Active',
        ]);

        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            'code' => 200,
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
            'message' => 'Success create user'
        ]);
    }

    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('email','password')))
        {
            return response()->json([
                'code' => 422,
                'message' => 'Wrong username or password!'
            ], 422);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            'code' => 200,
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
            'message' => 'Success login to system'
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'code' => 200,
            'message' => 'Success logout from system'
        ]);
    }

}