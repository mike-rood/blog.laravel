<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('https://necolas.github.io/normalize.css/8.0.1/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <script src="https://kit.fontawesome.com/c42221788b.js" crossorigin="anonymous"></script>
</head>
<body>    
    <section class='body-wrapper'>
        <section class='border header-wrapper'>
            @include('layouts.includes.header')
        </section>        
        <section class='content-wrapper'>
            @yield('main')
        </section>
        <section class='border footer-wrapper'>
            @include('layouts.includes.footer')
        </section>        
    </section>
    <script src="{{ asset('main.js') }}"></script>
</body>