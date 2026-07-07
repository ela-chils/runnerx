<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin RunnerX</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
        }

        .sidebar {
            height: 100vh;
            background: #081F5C;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            display: block;
            margin: 10px 0;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: #FFC107;
        }
    </style>
</head>

<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="sidebar" style="width: 220px;">
        <h4>RunnerX Admin</h4>

        <a href="/admin/dashboard">Dashboard</a>
        <a href="/admin/events">Event</a>
        <a href="#">Peserta</a>
        <a href="/logout">Logout</a>
    </div>

    <!-- CONTENT -->
    <div class="p-4 w-100">
        @yield('content')
    </div>

</div>

</body>
</html>