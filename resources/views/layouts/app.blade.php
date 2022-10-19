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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="{{ asset('vendor/Select2/css/select2.min.css') }}" rel="stylesheet" />

    <script src="{{ asset('vendor/jQuery-3.6.0/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('vendor/Select2/js/select2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".dropdown-menu li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <style>
        body {
            background-color: #ffffff;

        }

        .btn-custom {
            color: rgb(0, 0, 0);
            border-radius: 500px;
            -webkit-border-radius: 500px;
            -moz-border-radius: 500px;
            text-transform: uppercase;
            transition: background 0.4s, color 0.4s;
            padding: 10px 20px;
        }

        .btn-roxo {
            color: #ffffff;
        }

        .btn-roxo:hover {
            background-color: rgb(29, 207, 47);

        }

        .btn-verde:hover {
            background-color: rgb(29, 207, 47);

        }

        .btn-vermelho:hover {
            background-color: rgb(255, 0, 0);
            color: #000;
        }

        .btn-amarelo:hover {
            background-color: rgb(0, 25, 251);
            color: #ffffff;
        }

        .btn-azul:hover {
            background-color: rgb(55, 252, 255);
            color: #000;
        }

        .btn-white {
            color: #ffffff;
        }

        .btn-white:hover {
            background-color: rgb(255, 255, 255);
            color: #000;
        }

        .btn-orange {
            color: #ffffff;
        }

        .btn-orange:hover {
            background-color: rgb(249, 138, 64);
            color: #000;
        }

        .btn-black {
            color: #ffffff;
        }

        .btn-black:hover {
            background-color: rgb(233, 64, 249);
            color: #000;
        }

        .btn-brown {
            color: #000000;
        }

        .btn-brown:hover {
            background-color: rgb(100, 29, 207);
            color: #ffffff;

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

        #myInput {
            padding: 20px;
            margin-top: -6px;
            border: 0;
            border-radius: 0;
            background: #f1f1f1;
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
