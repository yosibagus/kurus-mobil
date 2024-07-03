<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PaketModel;
use Illuminate\Http\Request;

class DataPaketController extends Controller
{
    public function index()
    {
        $paket = PaketModel::all();
        return view('admin.paket.paket_view', compact('paket'));
    }

    public function tambah()
    {
        return view('admin.paket.paket_add');
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $logo = $request->file('logo');

        $file_gambar = 'gambar-' . uniqid() . $gambar->getClientOriginalExtension();
        $file_logo = 'logo-' . uniqid() . $logo->getClientOriginalExtension();

        $data = [
            'nama_paket' => $request->nama_paket,
            'type_mobil' => $request->type_mobil,
            'status_mobil' => $request->status_mobil,
            'harga_paket' => $request->harga_paket,
            'tahun' => $request->tahun,
            'nopol' => $request->nopol,
            'gambar' => $file_gambar,
            'logo' => $file_logo,
            'deskripsi' => $request->deskripsi,
        ];

        PaketModel::create($data);

        $gambar->move('logo', $file_gambar);
        $logo->move('logo', $file_logo);

        return redirect('data-paket')->with('success', 'Data Paket Berhasil di Simpan');
    }

    public function edit($id)
    {
        $paket = PaketModel::where('id_paket', $id)->first();
        return view('admin.paket.paket_edit', compact('paket'));
    }

    public function update($id, Request $request)
    {
        $paket = PaketModel::where('id_paket', $id)->first();

        if ($request->file('gambar') != '') {
            $gambar = $request->file('gambar');
            $file_gambar = 'gambar-' . uniqid() . $gambar->getClientOriginalExtension();
            $gambar->move('logo', $file_gambar);
        } else {
            $file_gambar = $paket->gambar;
        }

        if ($request->file('logo') != '') {
            $logo = $request->file('logo');
            $file_logo = 'logo-' . uniqid() . $logo->getClientOriginalExtension();
            $logo->move('logo', $file_logo);
        } else {
            $file_logo = $paket->logo;
        }

        $data = [
            'nama_paket' => $request->nama_paket,
            'type_mobil' => $request->type_mobil,
            'status_mobil' => $request->status_mobil,
            'harga_paket' => $request->harga_paket,
            'tahun' => $request->tahun,
            'nopol' => $request->nopol,
            'gambar' => $file_gambar,
            'logo' => $file_logo,
            'deskripsi' => $request->deskripsi,
        ];

        PaketModel::where('id_paket', $id)->update($data);
        return redirect('data-paket')->with('success', 'Data Paket Berhasil di Ubah');
    }

    public function delete($id)
    {
        PaketModel::where('id_paket', $id)->delete();
        return redirect('data-paket')->with('success', 'Data Paket Berhasil di Hapus');
    }
}
