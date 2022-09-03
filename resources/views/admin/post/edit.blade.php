@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <input type="text" name="title" placeholder="Enter post title" value="{{ $post->title }}">
            @error('title')
            <p>Title can not be empty</p>
            @enderror
        </div>        
        <div class="form-group w-75">
            <textarea id="summernote" name="content">
            {{ $post->content }}
            </textarea>
        </div>
        @error('content')
        <p>Content can not be empty</p>
        @enderror
        <div class="form-group w-75">
            <label>Превью</label>
            <div class="mb-2">
                <img src="{{ asset('storage/' . $post->preview_image) }}" alt="preview_image" class="w-25">
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <label class="custom-file-label">Выберите изображение</label>
                    <input type="file" class="custom-file-input" name="preview_image">
                </div>
            </div>
            @error('preview_image')
            <p>Preview can not be empty</p>
            @enderror
        </div>
        <div class="form-group w-75">
            <label>Главное изображение</label>
            <div class="mb-2">
                <img src="{{ asset('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <label class="custom-file-label">Выберите изображение</label>
                    <input type="file" class="custom-file-input" name="main_image">
                </div>
            </div>
            @error('main_image')
            <div class="alert-warning">Main image can not be empty</div>
            @enderror
        </div>
        <div class="form-group w-75">
            <label>Категория</label>
            <select class="form-control" data-placeholder="Выберите категорию" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                @endforeach
            </select>            
        </div>
        <div class="form-group">
            <label>Тэги</label>
            <select class="js-example-basic-multiple w-100" data-placeholder="Выберите тэги" name="tag_ids[]" multiple="multiple">
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}" {{ is_array( $post->tags->pluck('id')->toArray() ) && in_array( $tag->id, $post->tags->pluck('id')->toArray() ) ? 'selected' : '' }}>{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group"><input type="submit" value="Create"></div>
    </form>
</main>
@endsection



