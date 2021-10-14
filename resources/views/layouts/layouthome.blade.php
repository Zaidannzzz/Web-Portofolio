<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaidan Zulhakim</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body id="page-top">
        <nav class="navbar navbar-expand-lg" id="mainNav">
            <div class="container dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ url('/') }}">Home</a></li>
                    <li><a class="dropdown-item" href="{{ url('/Products') }}">Products</a></li>
                    <li><a class="dropdown-item" href="{{ url('/Contact') }}">Contact</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')
        <div class="mt-3 py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Zaidan Zulhakim 2021</small></div>
        </div>
    </body>
</html>