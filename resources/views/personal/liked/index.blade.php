@extends('layouts.template')

@section('main')
@include('personal.includes.sidebar')
<main class='border content'> 
    <div>
        <h2>{{ $title }}</h2>
        <p>User Likes</p>
    </div>
    <section class="container">
        
    </section>
</main>
@endsection