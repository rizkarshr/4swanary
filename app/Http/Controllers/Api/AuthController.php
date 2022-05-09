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