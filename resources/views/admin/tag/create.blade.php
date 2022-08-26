@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('admin.tag.store') }}" autocomplete="on" method="POST">
        @csrf
        <p><input type="text" name="title" placeholder="Enter tag title"></p>
        <p><input type="submit" value="Create"></p>        
    </form>
    @error('title')
    <p>Title can not be empty</p>
    @enderror
</main>
@endsection