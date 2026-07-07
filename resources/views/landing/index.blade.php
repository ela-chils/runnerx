@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section id="home" class="hero-section d-flex align-items-center">

    <div class="container text-center text-white">

        <h1 class="display-3 fw-bold text-gold" data-aos="fade-up">
            RunnerX
        </h1>

        <p class="lead fw-bold" data-aos="fade-up" data-aos-delay="200">
            Run Beyond Your Limits
        </p>

        <p class="text-light" data-aos="fade-up" data-aos-delay="300">
            Discover the best running events across Indonesia
        </p>

        <div data-aos="fade-up" data-aos-delay="400">

            <a href="#events" class="btn btn-gold btn-lg rounded-pill me-2">
                Explore Event
            </a>

            <a href="/register" class="btn btn-outline-light btn-lg rounded-pill">
                Join Now
            </a>

        </div>

    </div>

</section>


<!-- STATISTIC SECTION -->
<section class="py-5 bg-black-runner">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">
                <h2 class="fw-bold text-gold counter" data-target="120">0</h2>
                <p class="text-light">
                    Events
                </p>
            </div>


            <div class="col-md-3">
                <h2 class="fw-bold text-gold counter" data-target="15000">0</h2>
                <p class="text-light">
                    Runners
                </p>
            </div>


            <div class="col-md-3">
                <h2 class="fw-bold text-gold counter" data-target="30">0</h2>
                <p class="text-light">
                    Cities
                </p>
            </div>


            <div class="col-md-3">
                <h2 class="fw-bold text-gold counter" data-target="98">0</h2>
                <p class="text-light">
                    Satisfaction %
                </p>
            </div>

        </div>

    </div>

</section>



<!-- ABOUT RUNNERX -->
<section id="about" class="py-5 about-section">

<div class="container">

<div class="row align-items-center">


<!-- LEFT -->
<div class="col-lg-7">


<span class="badge badge-runner px-3 py-2 rounded-pill mb-3">
ABOUT RUNNERX
</span>


<h2 class="fw-bold text-white display-5">

Run Faster,
<br>
Connect Better

</h2>


<p class="mt-4 text-light fs-5">

RunnerX adalah platform event lari yang membantu
pelari menemukan berbagai event, melakukan pendaftaran,
dan bergabung dengan komunitas lari dalam satu platform.

</p>


<p class="text-light fs-5">

Kami hadir untuk membuat pengalaman berlari menjadi
lebih mudah, terorganisir, dan menyenangkan.

</p>


<a href="#events"
class="btn btn-gold rounded-pill px-4 py-2 mt-3">

Explore Event

</a>


</div>



<!-- RIGHT -->
<div class="col-lg-5 mt-5 mt-lg-0">


<div class="row g-4">


<div class="col-6">

<div class="p-4 rounded-4 shadow-lg text-center runner-card">

<h2 class="fw-bold text-gold">
100+
</h2>

<p>
Running Events
</p>

</div>

</div>



<div class="col-6">

<div class="p-4 rounded-4 shadow-lg text-center runner-card">

<h2 class="fw-bold text-gold">
5K+
</h2>

<p>
Active Runners
</p>

</div>

</div>



<div class="col-6">

<div class="p-4 rounded-4 shadow-lg text-center runner-card">

<h2 class="fw-bold text-gold">
50+
</h2>

<p>
Communities
</p>

</div>

</div>



<div class="col-6">

<div class="p-4 rounded-4 shadow-lg text-center bg-primary text-white">

<h2 class="fw-bold">
24/7
</h2>

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

Pilih kategori lari sesuai kemampuanmu,
mulai dari pemula hingga marathon runner profesional.

</p>



<div class="row g-4">


@foreach([
['3K Fun Run','Cocok untuk pemula dan keluarga'],
['5K Fun Run','Untuk meningkatkan stamina'],
['10K Run','Tantangan endurance pelari'],
['Full Marathon','Pencapaian maksimal runner']
] as $event)


<div class="col-md-3">

<div class="card runner-event shadow-lg h-100">


<div class="card-body">


<h5 class="fw-bold text-gold">

{{ $event[0] }}

</h5>


<p class="text-light">

{{ $event[1] }}

</p>


</div>


</div>


</div>


@endforeach


</div>


</div>


</section>





<!-- UPCOMING EVENT -->

<section class="py-5 about-section">


<div class="container">


<h2 class="text-center fw-bold text-white mb-5">

Upcoming Events

</h2>



<div class="row g-4">


@foreach([
['Grow Run 2026','Full Marathon','Yogyakarta','Rp 200.000'],
['H Run 2026','5K','Yogyakarta','Rp 100.000'],
['HRSIY PDHI Fun Run','10K','Jakarta','Rp 500.000'],
['Sae Run','3K','Probolinggo','Rp 400.000']
] as $event)



<div class="col-md-3">


<div class="card runner-event shadow-lg h-100">


<div class="card-body">


<h5 class="fw-bold text-gold">

{{ $event[0] }}

</h5>


<p class="text-light">
{{ $event[1] }}
</p>


<p class="text-light">
{{ $event[2] }}
</p>


<p class="fw-bold text-white">
{{ $event[3] }}
</p>


<hr>


<p class="small text-light">

🎁 Jersey, BIB, Medal,
Refreshment, Water Station

</p>


</div>


</div>


</div>


@endforeach



</div>


</div>


</section>


@endsection
