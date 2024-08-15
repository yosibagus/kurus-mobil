<?php

namespace App\Http\Controllers;

use App\Models\PesananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataLaporanController extends Controller
{
    public function index()
    {
        $pesanan =  DB::table('tb_pesanan')
            ->join('tb_paket', 'tb_paket.id_paket', '=', 'tb_pesanan.paket_id')
            ->join('users', 'users.id', '=', 'tb_pesanan.user_id')
            ->where('tb_pesanan.status_bayar', 'settlement')->get(); // Fetch all pesanan if no filter is applied
        $sum = PesananModel::sum('tb_pesanan.total');
        return view('admin.laporan.laporan', compact('pesanan', 'sum'));
    }

    public function generateLaporan(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $orders = PesananModel::getFilterDataPesanan($startDate, $endDate)->get();
        $sum = PesananModel::getFilterDataPesanan($startDate, $endDate)->sum('tb_pesanan.total');
        return view('admin.laporan.laporan', compact('orders', 'startDate', 'endDate', 'sum'));
    }
}
