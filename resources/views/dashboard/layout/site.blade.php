<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Marcelo Albert Santana dos Reis, Ernani Alexandre Wippel Neto e Vitor Krowczuk Beirão">
    <link rel="icon" href="img/aba.png">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons/css/all.min.css') }}" rel="stylesheet">
    <link href="assets/css/icons/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>

<body style="background-color: black;">

    @yield('content');

    <!-- Footer -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Wippel Produções
            <a href="https://github.com/albert-reis/projetoY" class="fab fa-github"> GitHub</a>
        </div>
        <!-- Copyright -->

    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>