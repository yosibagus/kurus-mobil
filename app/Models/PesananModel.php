<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PesananModel extends Model
{
    use HasFactory;

    protected $table = "tb_pesanan";
    protected $guarded = [];

    public static function getFilterDataPesanan($start, $end)
    {
        $query = DB::table('tb_pesanan')
            ->join('tb_paket', 'tb_paket.id_paket', '=', 'tb_pesanan.paket_id')
            ->join('users', 'users.id', '=', 'tb_pesanan.user_id')
            ->where('tb_pesanan.status_bayar', 'settlement')
            ->whereBetween(DB::raw('DATE(tgl_pesan)'), [$start, $end])
            ->orderBy('tb_pesanan.tgl_pesan', 'DESC');
        return $query;
    }
    

    public static function getAllDataPesanan()
    {
        $query = DB::table('tb_pesanan')
            ->join('tb_paket', 'tb_paket.id_paket', '=', 'tb_pesanan.paket_id')
            ->join('users', 'users.id', '=', 'tb_pesanan.user_id')
            ->where('tb_pesanan.status_pelatihan', '!=', 'selesai')
            ->orderBy('tb_pesanan.tgl_pesan', 'DESC');
        return $query;
    }

    public static function getDataPesananUser($id)
    {
        $query = DB::table('tb_pesanan')
            ->join('tb_paket', 'tb_paket.id_paket', '=', 'tb_pesanan.paket_id')
            ->where('tb_pesanan.user_id', $id)
            ->orderBy('tb_pesanan.tgl_pesan', 'DESC');
        return $query;
    }
}
