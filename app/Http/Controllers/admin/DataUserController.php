<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function index($role)
    {
        $akun = User::where('role', $role)->get();
        return view('admin.akun.akun_view', compact('akun', 'role'));
    }

    public function tambah($role)
    {
        return view('admin.akun.akun_add', compact('role'));
    }

    public function store($role, Request $request)
    { 
        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $role,
        ];

        User::create($data);
        return redirect('data-akun/' . $role)->with('success', 'Data Berhasil Ditambah');
    }
}
