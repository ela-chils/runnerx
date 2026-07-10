<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RunnerX</title>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">


    <style>

        body {
            background: #f4f7fc;
        }

        .hero-dashboard {
            background: linear-gradient(135deg, #081F5C, #1E3A8A);
            color: white;
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .hero-dashboard h1 {
            color: #FFC107;
            font-weight: 700;
        }

        .stat-card {
            background: white;
            border: none;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .event-card {
            border: none;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .event-card:hover {
            transform: translateY(-8px);
        }

        .event-title {
            color: #0b2c85;
            font-weight: bold;
        }

        .btn-runner {
            background: #FFC107;
            color: #081F5C;
            font-weight: bold;
            border-radius: 12px;
            padding: 10px 20px;
        }

        .btn-runner:hover {
            background: #ffd84d;
        }

        /* NAVBAR RUNNERX */

        .navbar-runnerx {
            background: #050505 !important;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
            padding: 15px 0;
        }


        .navbar-runnerx .brand {
            color: #FFC107 !important;
            font-size: 24px;
            font-weight: 700;
        }


        .navbar-runnerx .nav-link {
            color: white !important;
            font-weight: 500;
            margin-left: 15px;
        }


        .navbar-runnerx .nav-link:hover {
            color: #FFC107 !important;
        }


        .navbar {
            z-index: 9999;
        }


    </style>

</head>


<body>


<!-- Navbar Peserta -->

<nav class="navbar navbar-expand-lg navbar-dark navbar-runnerx">

    <div class="container">


        <a class="navbar-brand brand"
           href="{{ route('peserta.dashboard') }}">

            RunnerX

        </a>



        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>



        <div class="collapse navbar-collapse"
             id="navbarNav">


            <ul class="navbar-nav ms-auto">


                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('peserta.dashboard') }}">

                        Dashboard

                    </a>

                </li>



                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('peserta.events.index') }}">

                        Event

                    </a>

                </li>



                <li class="nav-item">

                    <a class="nav-link"
                    href="{{ route('peserta.pendaftaran.index') }}">

                        Event Saya

                    </a>

                </li>



                <li class="nav-item ms-2">


                    <form action="{{ route('logout') }}"
                          method="POST">

                        @csrf

                        <button class="btn btn-danger btn-sm">

                            Logout

                        </button>

                    </form>


                </li>


            </ul>


        </div>


    </div>

</nav>



<!-- Isi Halaman -->

<div class="container mt-5">


    @yield('content')


</div>



<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>