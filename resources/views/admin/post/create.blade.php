@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('admin.post.store') }}" autocomplete="on" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="title" placeholder="Enter post title" value="{{ old('title') }}">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group w-75">
            <textarea id="summernote" name="content">
            {{ old('content') }}
            </textarea>
        </div>
        @error('content')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="form-group w-75">
            <label>Превью</label>
            <div class="input-group">
                <div class="custom-file">
                    <label class="custom-file-label">Выберите изображение</label>
                    <input type="file" class="custom-file-input" name="preview_image">
                </div>
            </div>
            @error('preview_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group w-75">
            <label>Главное изображение</label>
            <div class="input-group">
                <div class="custom-file">
                    <label class="custom-file-label">Выберите изображение</label>
                    <input type="file" class="custom-file-input" name="main_image">
                </div>
            </div>
            @error('main_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group w-75">
            <label>Категория</label>
            <select class="form-control" data-placeholder="Выберите категорию" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->title }}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror            
        </div>
        <div class="form-group">
            <label>Тэги</label>
            <select class="js-example-basic-multiple w-100" data-placeholder="Выберите тэги" name="tag_ids[]" multiple="multiple">
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}" {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : '' }}>{{ $tag->title }}</option>
                @endforeach
            </select>
            @error('tag_ids')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group"><input type="submit" value="Create"></div>
    </form>    
</main>
@endsection