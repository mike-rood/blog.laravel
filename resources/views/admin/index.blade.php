@extends('layouts.template')

@section('main')
<aside class='border menu'>
    <h3><a href="{{ route('admin.index') }}">Admin menu</a></h3>
    <nav>
        @include('admin.includes.sidebar')
    </nav>
</aside>
<main class='border content'>
    <h2>{{ $title }}</h2>
    @include("admin.$page")
</main>
@endsection