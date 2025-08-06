<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                'message' => 'Credenciais inválidas.'
            ], 401);
        }

        $token = $user->createToken('api-token')->plainTextToken;

        $cookie = cookie(
            'access_token',  // nome
            $token,          // valor
            60 * 24,         // expiração em minutos (ex: 1 dia)
            null,            // path
            null,            // domain
            true,            // Secure (HTTPS)
            true,            // HttpOnly
            false,           // Raw
            'Strict'         // SameSite
        );

        return response()->json([
            'message' => 'Login realizado com sucesso.',
            'user' => $user,
        ])->withCookie($cookie);
    }

    public function logout(Request $request)
    {
        // $request->user()->currentAccessToken()->delete();


        Auth::guard('web')->logout();

        return response()->json(['message' => 'Logout realizado com sucesso.']);
    }

    public function me(Request $request)
    {
        return response()->json($request->user());
    }

}
