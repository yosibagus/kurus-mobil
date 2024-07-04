<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PesananModel;
use App\Models\TentorModel;
use Illuminate\Http\Request;

class DaftarPesananController extends Controller
{
    public function index()
    {
        $data['pesanan'] = PesananModel::getAllDataPesanan()->get();
        $data['tentor'] = TentorModel::all();
        return view('admin.pesanan.pesanan_view', $data);
    }

    public function update($id, Request $request)
    {
        $data = [
            'req_tentor' => $request->tentor,
            'req_tgl_mulai' => date('Y-m-d H:i:s', strtotime($request->tgl)),
            'status_pelatihan' => 'terima'
        ];

        PesananModel::where('no_transaksi', $id)->update($data);
        return redirect('daftar-pesanan')->with('success', 'Transaksi Berhasil di Proses');
    }

    public function selesai($id)
    {
        PesananModel::where('no_transaksi', $id)->update(['status_pelatihan' => 'selesai']);
        return redirect('daftar-pesanan')->with('success', 'Transaksi Berhasil di Selesaikan');
    }
}
