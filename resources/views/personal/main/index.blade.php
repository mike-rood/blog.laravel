@extends('layouts.template')

@section('main')
@include('layouts.includes.sidebar')
<main class='border content'>    
    <div>
        <h2>{{ $title }}</h2>
        <p>User dashboard</p>
    </div>
    <section class="container">
        <div>Понравившиеся посты</div>
        <div>Комментарии</div>
    </section>
</main>
@endsection