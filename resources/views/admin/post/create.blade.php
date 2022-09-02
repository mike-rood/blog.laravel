@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('admin.post.store') }}" autocomplete="on" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group"><input type="text" name="title" placeholder="Enter post title" value="{{ old('title') }}"></div>
        @error('title')
        <p>Title can not be empty</p>
        @enderror
        <div class="form-group w-75">
            <textarea id="summernote" name="content">
            {{ old('content') }}
            </textarea>
        </div>
        @error('content')
        <p>Content can not be empty</p>
        @enderror
        <div class="form-group w-75">
            <p>Превью</p>
            <div class="input-group">
                <div class="custom-file">
                    <label class="custom-file-label">Выберите изображение</label>
                    <input type="file" class="custom-file-input" name="preview_image">
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Загрузка</span>
                </div>
            </div>
            @error('preview_image')
            <p>Preview can not be empty</p>
            @enderror
        </div>
        <div class="form-group w-75">
            <p>Главное изображение</p>
            <div class="input-group">
                <div class="custom-file">
                    <label class="custom-file-label">Выберите изображение</label>
                    <input type="file" class="custom-file-input" name="main_image">
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Загрузка</span>
                </div>
            </div>
            @error('main_image')
            <p>Main image can not be empty</p>
            @enderror
        </div>
        <div class="form-group"><input type="submit" value="Create"></div>
    </form>    
</main>
@endsection