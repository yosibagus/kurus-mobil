<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PaketModel;
use App\Models\PesananModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $paket = PaketModel::where('status_mobil', 'Ready')->get();
        $proses = PesananModel::where('status_pelatihan', 'proses')->count();
        $selesai = PesananModel::where('status_pelatihan', 'selesai')->count();
        $ucapan = $this->getGreeting();
        return view('user.dashboard.dashboard', compact('paket', 'proses', 'selesai', 'ucapan'));
    }

    public function getGreeting()
    {
        $currentHour = Carbon::now('Asia/Jakarta')->format('H');

        if ($currentHour >= 5 && $currentHour < 12) {
            return "Selamat Pagi";
        } elseif ($currentHour >= 12 && $currentHour < 15) {
            return "Selamat Siang";
        } elseif ($currentHour >= 15 && $currentHour < 18) {
            return "Selamat Sore";
        } else {
            return "Selamat Malam";
        }
    }
}
