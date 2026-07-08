<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {

            $table->id();


            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();


            $table->foreignId('event_id')
                  ->constrained()
                  ->cascadeOnDelete();


            $table->string('nama_lengkap');

            $table->string('email');

            $table->string('no_hp');

            $table->enum('jenis_kelamin', [
                'Laki-Laki',
                'Perempuan'
            ]);


            $table->enum('ukuran_jersey', [
                'S',
                'M',
                'L',
                'XL',
                'XXL'
            ]);


            $table->string('kode_kupon')
                  ->nullable();


            $table->integer('harga_awal')
                  ->nullable();


            $table->integer('potongan')
                  ->default(0);


            $table->integer('harga_bayar')
                  ->nullable();


            $table->enum('status', [
                'pending',
                'lunas'
            ])->default('pending');


            $table->timestamps();

        });
    }



    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }

};