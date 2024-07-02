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
        Schema::create('tb_paket', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->enum('type_mobil',['Manual','Automatic']);
            $table->enum('status_mobil',['Ready','Maintenance']);
            $table->string('kali_pertemuan');
            $table->string('harga_paket');
            $table->string('tahun');
            $table->string('nopol');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_paket');
    }
};
