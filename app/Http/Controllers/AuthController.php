<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function loginView()  {
        return view('auth-login');
    }


   public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Validasi input
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->with('failed', 'Akun tidak ditemukan.');
        }

        if (!$user->email_verified_at) {
            return back()->with('failed', 'Akun Anda belum aktif. Silahkan melakukan verifikasi melalui email.');
        }

        if (!Auth::attempt($credentials)) {
            return back()->with('failed', 'Email / Password salah.');
        }

        $request->session()->regenerate();        
        $user = Auth::user();
        session(['organization_id' => $user->organization_id]);
        return redirect()->intended('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }
}
