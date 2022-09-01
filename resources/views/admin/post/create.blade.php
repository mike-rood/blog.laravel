@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('admin.post.store') }}" autocomplete="on" method="POST">
        @csrf
        <div class="form-group"><input type="text" name="title" placeholder="Enter post title" value="{{ old('title') }}"></div>
        @error('title')
        <p>Title can not be empty</p>
        @enderror
        <div class="form-group w-75"><textarea id="summernote" name="content">
            {{ old('content') }}
            </textarea></div>
        @error('content')
        <p>Content can not be empty</p>
        @enderror
        <div class="form-group"><input type="submit" value="Create"></div>
    </form>
    
</main>
@endsection