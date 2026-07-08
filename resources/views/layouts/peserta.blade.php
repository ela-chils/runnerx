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
            background-color: #f5f7fb;
        }


        .navbar-runnerx {
            background-color: #050505;
        }


        .brand {
            color: #f7c400 !important;
            font-weight: bold;
            font-size: 24px;
        }


        .btn-runnerx {
            background-color: #f7c400;
            color: black;
            font-weight: bold;
        }


        .btn-runnerx:hover {
            background-color: #ffd633;
            color: black;
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