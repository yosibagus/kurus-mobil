<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PaketModel;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $data['paket'] = PaketModel::where('status_mobil', 'Ready')->get();
        return view('user.paket.paket', $data);
    }
}
