<?php

namespace App\Http\Controllers;

use App\Models\PesananModel;
use Illuminate\Http\Request;

class DataLaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.laporan');
    }

    public function generateLaporan(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $orders = PesananModel::getFilterDataPesanan($startDate, $endDate)->get();

        return view('admin.laporan.laporan', compact('orders', 'startDate', 'endDate'));
    }
}
