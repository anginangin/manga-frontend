<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return response()->json([
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Gagal!'
            ], 401);
        }
    }

    public function signIn()
    {
        return view('pages.user.sign-in');
    }

    public function signUp()
    {
        return view('pages.user.sign-up');
    }

    public function register(Request $request)
    {
        $nama_lengkap = $request->input('name');
        $email        = $request->input('email');
        $password     = $request->input('password');

        if (User::where('email', '=', $email)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Email yang digunakan sudah terdaftar!'
            ], 400);
        }

        $user = User::create([
            'name'      => $nama_lengkap,
            'email'     => $email,
            'password'  => Hash::make($password)
        ]);

        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'Register Berhasil!'
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Register Gagal!'
            ], 400);
        }
    }
}
