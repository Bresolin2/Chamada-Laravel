<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="app.css">

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ url('favicon') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #ffffff;

        }

        .btn-roxo {
            color: #ffffff;
        }

        .btn-roxo:hover {
            background-color: rgb(29, 207, 47);
            color: rgb(255, 255, 255);
        }

        .btn-verde:hover {
            background-color: rgb(29, 207, 47);
            color: rgb(255, 255, 255);
        }

        .btn-vermelho:hover {
            background-color: rgb(255, 0, 0);
            color: #000;
        }

        .btn-amarelo:hover {
            background-color: rgb(250, 244, 73);
            color: #000;
        }

        .btn-azul:hover {
            background-color: rgb(55, 162, 255);
            color: #000;
        }

        .btn-white {
            color: #ffffff;
        }

        .btn-white:hover {
            background-color: rgb(255, 255, 255);
            color: #000;
        }

        .btn-black {
            color: #ffffff;
        }

        .btn-black:hover {
            background-color: rgb(249, 138, 64);
            color: #000;
        }

        #load {
            position: fixed;
            display: block;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body onload="loading()">
    <div class="">
        @yield('content')
    </div>
</body>

</html>
