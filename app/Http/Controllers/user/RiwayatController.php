<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PesananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index()
    {
        $transaksi = PesananModel::getDataPesananUser(Auth::user()->id)->get();
        return view('user.riwayat.riwayat_view', compact('transaksi'));
    }
}
