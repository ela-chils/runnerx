<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            // Nama event
            $table->string('nama_event');

            // Jenis event
            $table->enum('jenis_event', [
                '3K',
                '5K',
                '10K',
                'Half Marathon',
                'Full Marathon'
            ]);

            // Tanggal event
            $table->date('tanggal');

            // Kota penyelenggaraan
            $table->string('kota');

            // Harga pendaftaran
            $table->unsignedInteger('harga');

            // Kuota peserta
            $table->unsignedInteger('kuota_peserta');

            // Deskripsi event
            $table->text('deskripsi');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};