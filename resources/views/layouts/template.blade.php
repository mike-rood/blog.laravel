<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">    
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
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js') }}" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js') }}" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/c42221788b.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('main.js') }}"></script>    
</body>