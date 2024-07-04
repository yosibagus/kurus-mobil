<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PaketModel;
use App\Models\PesananModel;
use App\Models\TentorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function index($id)
    {
        $data['paket'] = PaketModel::where('id_paket', $id)->first();
        return view('user.pesan.pesan_view', $data);
    }

    public function pemesanan($id, Request $request)
    {
        $no_transaksi = uniqid();
        $tgl_pesan = Carbon::now();
        $tgl_kadaluarsa = $tgl_pesan->copy()->addHour();

        $data = [
            'no_transaksi' => $no_transaksi,
            'paket_id' => $request->id_paket,
            'total' => $request->total,
            'user_id' => Auth::user()->id,
            'tgl_pesan' => $tgl_pesan,
            'batas_pembayaran' => $tgl_kadaluarsa
        ];

        PesananModel::create($data);
        return redirect('transaksi/' . $no_transaksi);
    }

    public function pesan($id)
    {
        $data['transaksi'] = PesananModel::where('no_transaksi', $id)->first();
        $data['tentor'] = TentorModel::all();
        $data['paket'] = PaketModel::where('id_paket', $data['transaksi']->paket_id)->first();
        return view('user.pesan.pesan_step2', $data);
    }

    public function checkout($id)
    {
        $transaksi = PesananModel::where('no_transaksi', $id);
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        if ($transaksi->first()->snap_token != '') {
            $snapToken = $transaksi->first()->snap_token;
        } else {
            $params = array(
                'transaction_details' => array(
                    'order_id' => $transaksi->first()->no_transaksi,
                    'gross_amount' => $transaksi->first()->total,
                ),
                'customer_details' => array(
                    'first_name' => Auth::user()->nama_lengkap,
                    'last_name' => '',
                    'email' => Auth::user()->email,
                    'phone' => Auth::user()->no_hp,
                ),
            );
            $snapToken = \Midtrans\Snap::getSnapToken($params);


            $data = [
                'snap_token' => $snapToken,
                'req_tgl_mulai' => $_GET['tgl'] == '' ? 'Request' : date('Y-m-d H:i:s', strtotime($_GET['tgl'])),
                'req_tentor' => $_GET['id_tentor'] == '' ? 'Request' : $_GET['id_tentor'],
                'status_bayar' => 'pending',
            ];

            PesananModel::where('no_transaksi', $id)->update($data);
        }
        echo json_encode(['token' => $snapToken]);
    }

    public function pembayaran($id)
    {
        $data = [
            'status_bayar' => $_GET['transaction_status'],
            'tgl_bayar' => $_GET['transaction_time'],
            'nota' => $_GET['pdf_url']
        ];

        PesananModel::where('no_transaksi', $id)->update($data);
    }
}
