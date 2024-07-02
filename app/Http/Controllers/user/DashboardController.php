<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PaketModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    { 
        $paket = PaketModel::all();
        return view('user.dashboard.dashboard', compact('paket'));
    }
}
