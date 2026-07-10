<nav class="navbar navbar-expand-lg navbar-dark bg-navy fixed-top">

    <div class="container">


        <a class="navbar-brand fw-bold text-gold" href="/">
            RunnerX
        </a>


        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#nav">

            <span class="navbar-toggler-icon"></span>

        </button>



        <div class="collapse navbar-collapse" id="nav">


            <ul class="navbar-nav ms-auto align-items-lg-center">


                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        Home
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#events">
                        Events
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About
                    </a>
                </li>



                @guest


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        Login
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        Register
                    </a>
                </li>



                @else



                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">


                        {{ Auth::user()->name }}


                    </a>



                    <ul class="dropdown-menu dropdown-menu-end">


                        <li>

                            <form action="{{ route('logout') }}" method="POST">

                                @csrf

                                <button type="submit" class="dropdown-item">

                                    Logout

                                </button>

                            </form>

                        </li>


                    </ul>

                </li>



                @endguest



            </ul>


        </div>


    </div>


</nav>