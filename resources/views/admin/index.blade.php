@extends('layouts.template')

@section('main')
<aside class='border menu'>
    <h3>Admin menu</h3>
    <nav>
        @include('admin.includes.sidebar')
    </nav>
</aside>
<main class='border content'>
    <h2>{{ $page }}</h2>
    @include("admin.$page.index")
</main>
@endsection