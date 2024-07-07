<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login_admin');
    }

    public function login_user()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'user') {
                return redirect('home');
            } else {
                return redirect('beranda');
            }
        } else {
            echo "Username / Password tidak sesuai";
        }
    }

    public function registrasi()
    {
        return view('auth.registrasi');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ];

        User::create($data);
        return redirect('/user');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/user');
    }
}
