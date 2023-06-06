<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="{{ asset('icon.png') }}"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-100 menu">
        <div class="d-flex justify-content-around w-50">
            <a class="menuBtn text-light w-50" href="{{ route('home') }}"><h4>HOME</h3></a>
            <a class="menuBtn text-light w-50" href="{{ route('games') }}"><h4>GAMES</h4></a>
        </div>
    </div>
    <div>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>