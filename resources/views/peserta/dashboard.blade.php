@extends('layouts.app')

@section('content')

<div class="container py-5 mt-5">

    <div class="card border-0 shadow-lg rounded-4"
         style="background:#0b0f99; color:white;">

        <div class="card-body p-5">

            <h2 class="fw-bold text-warning">
                Dashboard Peserta
            </h2>

            <p class="mt-2">
                Selamat datang, kamu sudah login sebagai peserta RunnerX 🏃‍♂️
            </p>

            <hr style="border-color: rgba(255,255,255,0.2);">

            <p>
                Di sini nanti kamu bisa:
            </p>

            <ul>
                <li>Lihat event lari</li>
                <li>Daftar lomba</li>
                <li>Check status pendaftaran</li>
            </ul>

        </div>

    </div>

</div>

@endsection