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
        Schema::create('tbmobil', function (Blueprint $table) {
            $table->id();
            $table->string('merk_mobil');
            $table->enum('type_mobil',['Manual','Automatic']);
            $table->string('tahun');
            $table->string('nopol');
            $table->string('gambar');
            $table->enum('status_mobil',['Ready','Maintenance']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbmobil');
    }
};
