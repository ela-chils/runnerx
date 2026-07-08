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

            $table->string('nama_event');

            $table->enum('jenis_event', [
                '3K',
                '5K',
                '10K',
                'Half Marathon',
                'Full Marathon'
            ]);

            $table->date('tanggal');

            $table->enum('kota', [
                'Jakarta',
                'Yogyakarta',
                'Semarang',
                'Kendal'
            ]);

            $table->integer('harga');

            $table->integer('kuota_peserta');

            $table->text('deskripsi');

            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};