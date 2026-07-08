<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::create('registrations', function (Blueprint $table) {


            $table->id();


            // relasi peserta
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();


            // relasi event
            $table->foreignId('event_id')
                  ->constrained()
                  ->cascadeOnDelete();



            $table->string('nama_lengkap');

            $table->string('email');


            $table->string('no_hp');


            $table->enum('jenis_kelamin',[
                'Laki-Laki',
                'Perempuan'
            ]);



            $table->enum('ukuran_jersey',[
                'S',
                'M',
                'L',
                'XL',
                'XXL'
            ]);



            $table->string('kode_kupon')
                  ->nullable();



            $table->integer('harga_bayar');


            $table->timestamps();


        });

    }



    public function down(): void
    {

        Schema::dropIfExists('registrations');

    }

};