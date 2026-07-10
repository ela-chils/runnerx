<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin RunnerX</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body{
            margin:0;
            background:#f4f6fb;
            font-family:'Segoe UI', sans-serif;
        }

        .wrapper{
            display:flex;
        }

        .sidebar{
            width:260px;
            min-height:100vh;
            background:#081F5C;
            padding:35px 25px;
        }

        .logo{
            color:#FFC107;
            font-size:32px;
            font-weight:bold;
            margin-bottom:45px;
            line-height:1.2;
        }

        .sidebar a{
            display:block;
            text-decoration:none;
            color:white;
            padding:14px 18px;
            margin-bottom:12px;
            border-radius:12px;
            transition:0.3s;
            font-size:17px;
        }

        .sidebar a:hover{
            background:#FFC107;
            color:#081F5C;
        }

        .content{
            flex:1;
            padding:45px;
        }

        .logout-btn{
            width:100%;
            border:none;
            background:#FFC107;
            color:#081F5C;
            padding:14px;
            border-radius:12px;
            font-weight:bold;
            margin-top:25px;
            transition:0.3s;
        }

        .logout-btn:hover{
            background:#ffd84d;
        }

    </style>

</head>

<body>

<div class="wrapper">

    <div class="sidebar">

        <div class="logo">
            RunnerX<br>
            Admin
        </div>

        <a href="{{ route('admin.dashboard') }}">
            Dashboard
        </a>

        <a href="{{ route('admin.events.index') }}">
            Event
        </a>

        <a href="{{ route('admin.peserta') }}">
            Peserta
        </a>

        <form action="{{ route('logout') }}"
              method="POST">

            @csrf

            <button type="submit"
                    class="logout-btn">

                Logout

            </button>

        </form>

    </div>

    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>