<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilUserController extends Controller
{
    public function index()
    {
        $data['akun'] = User::where('id', Auth::user()->id)->first();
        return view('user.akun.akun', $data);
    }

    public function update(Request $request)
    { 
        if ($request->password != '') {
            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ];
        } else {
            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'email' => $request->email,
            ];
        }
        User::where('id', Auth::user()->id)->update($data);
        return redirect('profil-user')->with('success', 'Akun Berhasil di Perbaharui');
    }
}
