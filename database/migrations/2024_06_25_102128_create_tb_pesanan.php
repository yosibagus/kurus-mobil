<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->string('harga');
            $table->enum('checkout',['Ya','Tidak']);
            $table->date('req_tgl_mulai');
            $table->time('req_waktu');
            $table->string('req_tentor');
            $table->string('total');
            $table->date('batas_pembayaran');
            $table->enum('status_bayar',['Terima','Tunda']);
            $table->date('tgl_terima');
            $table->date('tgl_bayar');
            $table->string('bank');
            $table->string('bukti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pesanan');
    }
};
