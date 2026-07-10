@extends('layouts.app')

@section('content')


<!-- HERO SECTION -->

<section id="home" class="hero-section">


    <div class="container">

        <div class="row align-items-center">


            <div class="col-lg-7 text-white">


                <span class="badge badge-runner mb-3">

                    RUNNING EVENT PLATFORM

                </span>



                <h1 class="display-2 fw-bold mt-3">


                    RUN

                    <span class="text-gold">

                        BEYOND

                    </span>


                    <br>

                    LIMITS


                </h1>



                <p class="lead mt-4">

                    RunnerX menghadirkan pengalaman event lari
                    terbaik untuk para runner di Indonesia.

                </p>



                <p>

                    Temukan event favoritmu,
                    daftar dengan mudah,
                    dan bergabung bersama komunitas runner.

                </p>




                <div class="mt-4">


                    <a href="#events"
                    class="btn btn-gold btn-lg me-3">

                        Explore Event

                    </a>



                    <a href="/register"
                    class="btn btn-outline-runner btn-lg">

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



<form>


<div class="row g-3">



<div class="col-lg-4">


<select class="form-select">

<option selected>
Pilih Kota
</option>

<option>
Yogyakarta
</option>

<option>
Jakarta
</option>

<option>
Probolinggo
</option>

</select>


</div>



<div class="col-lg-4">


<select class="form-select">


<option selected>
Jenis Event
</option>

<option>
3K
</option>

<option>
5K
</option>

<option>
10K
</option>

<option>
Full Maraton
</option>


</select>


</div>



<div class="col-lg-4">


<button type="button"
class="btn btn-gold w-100">

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



@foreach([

[
'Grow Run 2026',
'Full Maraton',
'15 Februari 2026',
'Yogyakarta',
'Rp. 200.000',
'2.000'
],

[
'H Run 2026',
'5K',
'28 Mei 2026',
'Yogyakarta',
'Rp. 100.000',
'5.000'
],

[
'HRSIY PDHI Fun Run',
'10K',
'8 Juli 2026',
'Jakarta',
'Rp. 500.000',
'5.000'
],

[
'Sae Run',
'3K',
'8 Februari 2026',
'Probolinggo',
'Rp. 400.000',
'500'
]

] as $event)



<div class="col-lg-3 col-md-6">


<div class="runner-event p-4 rounded-4 h-100">


<h5 class="text-gold fw-bold">

{{ $event[0] }}

</h5>


<span class="badge bg-primary">

{{ $event[1] }}

</span>



<p class="mt-3">

📅 {{ $event[2] }}

</p>



<p>

📍 {{ $event[3] }}

</p>



<p class="fw-bold text-gold">

💰 {{ $event[4] }}

</p>



<p>

👥 Kuota {{ $event[5] }} peserta

</p>



<hr>


<p class="small">

🎁 Benefit:

<br>

Jersey, BIB Number,
Medal, Refreshment,
Water Station, Doorprize

</p>



<<a href="{{ route('login') }}"
class="btn btn-gold btn-sm">

    Daftar Sekarang

</a>


</div>


</div>



@endforeach



</div>


</div>


</section>



@endsection