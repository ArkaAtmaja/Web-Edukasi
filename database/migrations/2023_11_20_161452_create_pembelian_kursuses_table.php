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
        Schema::create('pembelian_kursuses', function (Blueprint $table) {
            $table->id('id_pembelian_kursus');
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            $table->foreignId('id_jenis_transaksi')->constrained('jenis_transaksis', 'id_jenis_transaksi')->onDelete('cascade');
            $table->foreignId('id_kursus')->constrained('kursuses', 'id_kursus')->onDelete('cascade');
            $table->dateTime('tanggal_pembelian');
            $table->double('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_kursuses');
    }
};
