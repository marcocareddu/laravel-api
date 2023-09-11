<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>{{ config('app.name', 'Portfolio') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">

    {{-- CDNS --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'
        integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=='
        crossorigin='anonymous'>
    @yield('cdns')


    <!-- Import Resources -->
    @vite(['resources/js/app.js'])
</head>

<body>

    {{-- Header --}}
    <header class="position-sticky">
        @include('includes.header')
    </header>
    {{-- Main --}}
    <main>
        @yield('main-content')
    </main>
    {{-- Footer --}}
    @include('includes.footer')

    {{-- Toast --}}
    @include('includes.layout.toast')

    {{-- Scripts --}}
    @yield('scripts')

</body>

</html>
