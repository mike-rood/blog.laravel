@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <p><label for="title">Название поста: <input type="text" name="title" value="{{ $post->title }}"></label></p>
    <p><input type="submit" value="Изменить"></p>
    @error('title')
    <p>Title can not be empty</p>
    @enderror
    </form>
</main>
@endsection



