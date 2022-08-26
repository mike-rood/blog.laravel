@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <p>Blog dashboard</p>
</main>
@endsection