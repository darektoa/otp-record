<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LoginToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            $loginToken = LoginToken::firstOrCreate(
                ['user_id' => auth()->user()->id],
                ['token' => Hash::make(auth()->user()->id)]
            );

            return response()->json([
                'token' => $loginToken->token,
                'data' => auth()->user(),
            ]);
        } else {
            return response()->json(['message'=> 'invalid login'], 401);
        }
    }


    public function logout(Request $request) {
        $loginToken = LoginToken::where('token', $request->header('X-Auth-Token'))->first();

        if(!$loginToken) return response()->json(['message' => 'Unauthorized Token'], 401);

        $loginToken->delete();
        return response()->json(['message' => 'Logout Success']);
    }
}
