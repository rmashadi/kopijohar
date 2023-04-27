<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return view('user.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/user');
        }

        return back()->withErrors([
            'error' => 'Email atau Password Salah, Silahkan cek ulang data Anda'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $newData = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($newData);

        return redirect()->route('auth.user')->with(['success' => 'Data berhasil dibuat']);
    }
}