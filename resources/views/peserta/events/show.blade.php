@extends('layouts.peserta')

@section('content')

<div class="container mt-5">


    <div class="card shadow">


        <div class="card-header bg-primary text-white">

            <h3 class="mb-0">
                {{ $event->nama_event }}
            </h3>

        </div>


        <div class="card-body">


            <h5 class="fw-bold">
                Detail Event
            </h5>


            <hr>


            <p>
                <strong>Jenis Event:</strong>
                {{ $event->jenis_event }}
            </p>


            <p>
                <strong>Tanggal:</strong>
                {{ $event->tanggal }}
            </p>


            <p>
                <strong>Kota:</strong>
                {{ $event->kota }}
            </p>


            <p>
                <strong>Harga Registrasi:</strong>
                Rp {{ number_format($event->harga) }}
            </p>


            <p>
                <strong>Kuota Peserta:</strong>
                {{ $event->kuota_peserta }} peserta
            </p>


            <hr>


            <h5 class="fw-bold">
                Deskripsi
            </h5>


            <p>
                {{ $event->deskripsi }}
            </p>


            <a href="{{ route('peserta.pendaftaran.create', $event->id) }}"
                class="btn btn-success">

                Daftar Sekarang

            </a>


            <a href="{{ route('peserta.events.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>


        </div>


    </div>


</div>

@endsection