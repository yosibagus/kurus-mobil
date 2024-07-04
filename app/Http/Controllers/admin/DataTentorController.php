<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TentorModel;
use Illuminate\Http\Request;

class DataTentorController extends Controller
{
    public function index()
    {
        $tentor = TentorModel::all();
        return view('admin.tentor.tentor_view', compact('tentor'));
    }

    public function tambah()
    {
        return view('admin.tentor.tentor_add');
    }

    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $file_name = uniqid() . '.' . $foto->getClientOriginalExtension();

        $data = [
            'nama_tentor' => $request->nama_tentor,
            'tanggal_lahir' => $request->tanggal_lahir,
            'biodata' => $request->biodata,
            'foto' => $file_name
        ];

        $foto->move('foto', $file_name);
        TentorModel::create($data);
        return redirect('data-tentor')->with('success', 'Data Tentor Berhasil di Simpan');
    }

    public function edit($id)
    {
        $detail = TentorModel::where('id_tentor', $id)->first();
        return view('admin.tentor.tentor_edit', compact('detail'));
    }

    public function update($id, Request $request)
    {
        if ($request->file('foto') != '') {
            $foto = $request->file('foto');
            $file_name = uniqid() . '.' . $foto->getClientOriginalExtension();
            $data = [
                'nama_tentor' => $request->nama_tentor,
                'tanggal_lahir' => $request->tanggal_lahir,
                'biodata' => $request->biodata,
                'foto' => $file_name
            ];
            $foto->move('foto', $file_name);
        } else {
            $data = [
                'nama_tentor' => $request->nama_tentor,
                'tanggal_lahir' => $request->tanggal_lahir,
                'biodata' => $request->biodata
            ];
        }

        TentorModel::where('id_tentor', $id)->update($data);
        return redirect('data-tentor')->with('success', 'Data Tentor Berhasil di Update');
    }

    public function delete($id)
    {
        TentorModel::where('id_tentor', $id)->delete();
        return redirect('data-tentor')->with('success', 'Data Tentor Berhasil di Hapus');
    }
}
