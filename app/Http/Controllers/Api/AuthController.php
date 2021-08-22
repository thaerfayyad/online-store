<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = auth()->user()->createToken('api')->accessToken;

        return response(['user' => auth()->user(), 'access_token' => $accessToken]);

    }

    // public function logout()
    // {
    //     auth('api')->logout();
    //     return response()->json(['error' => false, 'message' => 'Logout successfuly'], 200);
    // }
}
