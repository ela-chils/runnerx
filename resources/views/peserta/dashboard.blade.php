@extends('layouts.peserta')

@section('content')

<div class="container py-5">

    <!-- Hero -->
    <div class="hero-dashboard mb-5">

        <h1>Dashboard Peserta</h1>

        <p class="fs-5 mt-3">
            Selamat datang,
        </p>

        <p>
            Temukan event lari favoritmu dan raih garis finish bersama RunnerX.
        </p>

    </div>


    <!-- Statistik -->
    <div class="row mb-5">

        <div class="col-md-4 mb-3">

            <div class="stat-card">

                <h6 class="text-muted">
                    Total Event
                </h6>

                <h2 class="fw-bold text-primary">
                    {{ $events->count() }}
                </h2>

            </div>

        </div>

        <div class="col-md-4 mb-3">

            <div class="stat-card">

                <h6 class="text-muted">
                    Event Saya
                </h6>

                <h2 class="fw-bold text-success">
                    {{ auth()->user()->pendaftaran()->count() }}
                </h2>

            </div>

        </div>

        <div class="col-md-4 mb-3">

            <div class="stat-card">

                <h6 class="text-muted">
                    Status Akun
                </h6>

                <h2 class="fw-bold text-warning">
                    Aktif
                </h2>

            </div>

        </div>

    </div>


    <!-- Daftar Event -->
    <h2 class="fw-bold mb-4">
        Event RunnerX
    </h2>

    <div class="row">

        @foreach($events as $event)

        <div class="col-md-4 mb-4">

            <div class="card event-card h-100">


            @if($event->gambar)

            <img src="{{ asset('storage/'.$event->gambar) }}"
                class="event-image">

            @endif



            <div class="card-body">

                    <span class="badge bg-primary mb-3">
                        {{ $event->jenis_event }}
                    </span>

                    <h4 class="event-title mb-3">
                        {{ $event->nama_event }}
                    </h4>

                    <hr>

                    <p class="mb-2">
                        📅 {{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}
                    </p>

                    <p class="mb-2">
                        📍 {{ $event->kota }}
                    </p>

                    <p class="mb-3">
                        💰 Rp {{ number_format($event->harga, 0, ',', '.') }}
                    </p>

                    <p class="text-muted mb-4">
                        Sisa Kuota: {{ $event->kuota_peserta }} peserta
                    </p>

                    <a href="{{ route('peserta.events.show', $event->id) }}"
                    class="btn btn-runner">
                        Lihat Detail
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection