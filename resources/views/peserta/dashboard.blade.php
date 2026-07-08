@extends('layouts.peserta')

@section('content')

<div class="container py-5 mt-5">


    <!-- Welcome Card -->
    <div class="card border-0 shadow-lg rounded-4 mb-5"
         style="background:#0b0f99; color:white;">

        <div class="card-body p-5">

            <h2 class="fw-bold text-warning">
                Dashboard Peserta
            </h2>

            <p class="mt-2">
                Selamat datang, {{ auth()->user()->name }} 👋
            </p>

            <p>
                Kamu sudah login sebagai peserta RunnerX 🏃‍♂️
            </p>

        </div>

    </div>



    <!-- EVENT LIST -->

    <h3 class="fw-bold mb-4">
        Event RunnerX 🏁
    </h3>


    <div class="row">


        @forelse($events as $event)


        <div class="col-md-4 mb-4">


            <div class="card border-0 shadow rounded-4">


                <div class="card-body">


                    <h5 class="fw-bold text-primary">
                        {{ $event->nama_event }}
                    </h5>


                    <p class="mb-1">
                        🏃 Jenis:
                        {{ $event->jenis_event }}
                    </p>


                    <p class="mb-1">
                        📅 Tanggal:
                        {{ $event->tanggal }}
                    </p>


                    <p class="mb-1">
                        📍 Lokasi:
                        {{ $event->kota }}
                    </p>


                    <p class="mb-3">
                        💰 Harga:
                        Rp {{ number_format($event->harga,0,',','.') }}
                    </p>


                    <a href="{{ route('peserta.events.show',$event->id) }}"
                       class="btn btn-warning fw-bold">
                        Lihat Detail
                    </a>


                </div>


            </div>


        </div>


        @empty


        <div class="alert alert-info">
            Belum ada event tersedia.
        </div>


        @endforelse


    </div>


</div>

@endsection