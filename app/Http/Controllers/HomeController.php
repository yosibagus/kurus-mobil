<?php

namespace App\Http\Controllers;

use App\Models\PaketModel;
use App\Models\PesananModel;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['user'] = User::where('role', 'admin')->count();
        $data['customer'] = User::where('role', 'user')->count();
        $data['paket'] = PaketModel::count();
        $data['pesanan'] = PesananModel::count();
        return view('home.home', $data);
    }
}
