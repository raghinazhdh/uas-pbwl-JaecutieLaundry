<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->id('trans_id');
            $table->unsignedBigInteger('trans_pel_id');
            $table->unsignedBigInteger('trans_lay_id');
            $table->unsignedBigInteger('user_id');
            $table->date('trans_tgl_masuk');
            $table->date('trans_tgl_selesai');
            $table->integer('trans_berat');
            $table->integer('trans_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
