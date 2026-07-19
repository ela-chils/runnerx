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
        Schema::table('pendaftarans', function (Blueprint $table) {

            $table->string('kode_bib')
                ->nullable()
                ->after('kode_kupon');


            $table->enum('status_pembayaran', [
                'pending',
                'lunas',
                'gagal'
            ])
            ->default('pending')
            ->after('harga_bayar');


            $table->enum('status_kehadiran', [
                'belum hadir',
                'hadir'
            ])
            ->default('belum hadir')
            ->after('status_pembayaran');

        });
    }


    public function down(): void
    {
        Schema::table('pendaftarans', function (Blueprint $table) {

            $table->dropColumn([
                'kode_bib',
                'status_pembayaran',
                'status_kehadiran'
            ]);

        });
    }
};
