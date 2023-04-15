<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthService
{
    public function login($request)
    {
        try {
            $admin = User::where('email', $request->email)->first();

            if (!$admin) {
                return false;
            }

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials) && $admin->status) {
                return true;
            }

            return false;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function validation($request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password' => 'required|max:255',
        ], [
            'email.exists' => 'Email atau password salah'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
