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
        Schema::create('keluargaKurangMampu', function (Blueprint $table) {
            $table->string('noKK');
            $table->integer('jumlah_tanggungan');
            $table->float('pendapatan');
            $table->integer('jumlah_kendaraan');
            $table->integer('luas_tanah');
            $table->integer('kondisi_rumah');
            $table->timestamps();
        
            $table->foreign('noKK')->references('noKK')->on('keluarga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluargaKurangMampu');
    }
};
