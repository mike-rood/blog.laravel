@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <p><label for="title">Название категории: <input type="text" name="title" value="{{ $category->title }}"></label></p>
    <p><input type="submit" value="Изменить"></p>
    @error('title')
    <p>Title can not be empty</p>
    @enderror
    </form>
</main>
@endsection



