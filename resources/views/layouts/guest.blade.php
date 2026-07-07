<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunnerX Auth</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-br from-[#0b0f99] to-black flex items-center justify-center">

    <!-- HAPUS LOGO LARAVEL DEFAULT -->
    <div class="w-full">
        {{ $slot }}
    </div>

</body>
</html>