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
        Schema::create('kursuses', function (Blueprint $table) {
            $table->id('id_kursus');
            $table->foreignId('id_sertifikat')->constrained('sertifikats', 'id_sertifikat')->onDelete('cascade');
            $table->foreignId('id_kategori_kursus')->constrained('kategori_kursuses', 'id_kategori_kursus')->onDelete('cascade');
            $table->foreignId('id_mentor')->constrained('mentors', 'id_mentor')->onDelete('cascade');
            $table->string('nama_kursus');
            $table->dateTime('waktu_penyelesaian');
            $table->string('tingkat_kesukaran');
            $table->string('pembelajaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursuses');
    }
};
