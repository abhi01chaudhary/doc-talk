<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DOC TALK') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="top-navbar">
        <div class="top-left">
            <h5 class="top-title"><span class="top-number-icon"></span>9842036673</h5>
            <h5 class="top-title">9842036673</h5>
        </div>
        <div class="top-right">
            <i className="top-icons fab fa-facebook-square"></i>
            <i className="top-icons fab fa-twitter-square"></i>
            <i className="top-icons fab fa-pinterest-square"></i>
            <i className="top-icons fab fa-instagram-square"></i>
        </div>
    </nav>
    @yield('content')
</body>
</html>
