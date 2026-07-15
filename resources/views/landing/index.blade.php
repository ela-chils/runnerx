@extends('layouts.app')

@section('content')


<!-- HERO SECTION -->

<section id="home" class="hero-section">


    <div class="container">

        <div class="row align-items-center">


            <div class="col-lg-8 text-white text-center mx-auto hero-content">

                <span class="badge badge-runner mb-3 hero-item">

                    RUNNING EVENT PLATFORM

                </span>



                <h1 class="display-2 fw-bold mt-3 hero-item">


                    RUN

                    <span class="text-gold">

                        BEYOND

                    </span>


                    <br>

                    LIMITS


                </h1>



                <p class="lead mt-4 hero-item">

                    RunnerX menghadirkan pengalaman event lari
                    terbaik untuk para runner di Indonesia.

                </p>



                <p class="hero-item>

                    Temukan event favoritmu,
                    daftar dengan mudah,
                    dan bergabung bersama komunitas runner.

                </p>




                <div class="mt-4 d-flex justify-content-center hero-item">


                    <a href="#events"
                    class="btn btn-gold btn-lg me-3 hero-item">

                        Explore Event

                    </a>



                    <a href="/register"
                    class="btn btn-outline-runner btn-lg hero-item">

                        Join Now

                    </a>


                </div>


            </div>


</section>





<!-- SEARCH EVENT SECTION -->

<section class="search-section">


<div class="container">


<div class="search-box">


<h2 class="text-white fw-bold text-center mb-4">

    Find Your Run

</h2>


<p class="text-light text-center mb-4">

    Temukan event lari favoritmu berdasarkan kota dan kategori.

</p>



<form action="{{ route('home') }}" method="GET">

    <input type="hidden" name="scroll" value="events">

    <div class="row g-3">

        <div class="col-lg-4">
            <select name="kota" class="form-select">
                <option value="">Semua Kota</option>

                @foreach($kotas as $kota)
                    <option value="{{ $kota }}"
                        {{ request('kota') == $kota ? 'selected' : '' }}>
                        {{ $kota }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-lg-4">
            <select name="jenis_event" class="form-select">
                <option value="">Semua Event</option>

                @foreach($jenisEvents as $jenis)
                    <option value="{{ $jenis }}"
                        {{ request('jenis_event') == $jenis ? 'selected' : '' }}>
                        {{ $jenis }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-lg-4">
            <button type="submit" class="btn btn-gold w-100">
                <i class="bi bi-search"></i>
                Cari Event
            </button>
        </div>

    </div>

</form>


</div>


</div>


</section>





<!-- ABOUT SECTION -->


<section id="about" class="about-section py-5">


<div class="container">


<div class="row align-items-center">



<div class="col-lg-7">


<span class="badge badge-runner">

ABOUT RUNNERX

</span>



<h2 class="display-5 fw-bold mt-3">

Run Faster,

<br>

Connect Better

</h2>



<p class="mt-4 fs-5">

RunnerX adalah platform event lari yang membantu
pelari menemukan event, melakukan pendaftaran,
dan bergabung dengan komunitas dalam satu platform.

</p>



<a href="#events"
class="btn btn-gold mt-3">

Explore Event

</a>


</div>




<div class="col-lg-5 mt-4">


<div class="row g-3">



<div class="col-6">

<div class="runner-card p-4 text-center rounded-4">

<h3 class="text-gold">
100+
</h3>

<p>
Events
</p>

</div>

</div>



<div class="col-6">

<div class="runner-card p-4 text-center rounded-4">

<h3 class="text-gold">
5K+
</h3>

<p>
Runners
</p>

</div>

</div>



<div class="col-6">

<div class="runner-card p-4 text-center rounded-4">

<h3 class="text-gold">
50+
</h3>

<p>
Communities
</p>

</div>

</div>



<div class="col-6">

<div class="runner-card p-4 text-center rounded-4">

<h3 class="text-gold">
24/7
</h3>

<p>
Support
</p>

</div>

</div>


</div>


</div>



</div>


</div>


</section>






<!-- EVENTS SECTION -->


<section id="events" class="py-5 bg-black-runner">


<div class="container">


<h2 class="text-center fw-bold text-white mb-3">

    Events

</h2>


<p class="text-center text-light mb-5">

    Pilih event lari favoritmu dan mulai tantanganmu bersama RunnerX.

</p>



<div class="row g-4">

@forelse($events as $event)

<div class="col-lg-3 col-md-6">


<div class="runner-event p-4 rounded-4 h-100">
    @if($event->gambar)

    <img src="{{ asset('storage/'.$event->gambar) }}"
        class="event-image">

    @endif


<h5 class="text-gold fw-bold">

{{ $event->nama_event }}

</h5>


<span class="badge bg-primary">

{{ $event->jenis_event }}

</span>



<p class="mt-3">

📅 {{ $event->tanggal }}

</p>



<p>

📍 {{ $event->kota }}

</p>



<p class="fw-bold text-gold">

💰 Rp. {{ number_format($event->harga, 0, ',', '.') }}

</p>



<p>

👥 Kuota {{ $event->kuota_peserta }} tersisa

</p>



<hr>


<p class="small">

🎁 {{ $event->deskripsi }}

</p>



<a href="{{ route('login') }}"
   class="btn btn-gold btn-sm">
    Daftar Sekarang
</a>


</div>


</div>

@empty

    <div class="col-12 text-center">
        <p class="text-light">
            Belum ada event yang tersedia.
        </p>
    </div>

    @endforelse

</div>



</div>


</div>


</section>


@if(request('scroll') == 'events')

<script>

window.onload = function(){

    document
    .getElementById('events')
    .scrollIntoView({
        behavior:'smooth'
    });

}

</script>

@endif


@endsection