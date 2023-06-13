<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('admin.auth.login');
    }

    public function forgotPasswordView()
    {
        return view('admin.auth.forgot-password');
    }

    public function resetPasswordView(string $token)
    {
        return view('admin.auth.reset-password', ['token' => $token]);
    }

    public function login(Request $request, AuthService $authService)
    {
        $validate = $authService->validation($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $authService->login($request);

        if ($status) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('admin.login');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email'], [
            'email.exists' => 'Email tidak terdaftar'
        ]);

        $email = $request->only('email');

        $status = Password::sendResetLink($email);

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('admin.login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
