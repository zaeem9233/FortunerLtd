<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Magnific -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Satoshi -->
    <link rel="stylesheet" href="{{ asset('css/satoshi.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>