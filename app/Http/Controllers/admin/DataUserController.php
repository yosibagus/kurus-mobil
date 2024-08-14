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
            'hint' => $request->password,
            'role' => $role,
        ];

        User::create($data);
        return redirect('data-akun/' . $role)->with('success', 'Data Berhasil Ditambah');
    }

    public function edit($role, $id)
    {
        $data['detail'] = User::where('id', $id)->first();
        $data['role'] = $role;
        return view('admin.akun.akun_edit', $data);
    }

    public function update($role, $id, Request $request)
    {
        if ($request->password != '') {
            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ];
        } else {
            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'email' => $request->email
            ];
        }
        User::where('id', $id)->update($data);
        return redirect('data-akun/' . $role)->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data Berhasil di Hapus');
    }
}
