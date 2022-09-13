@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <div>
        <h2>{{ $title }}</h2>
        <p>Blog dashboard</p>
    </div>
    <section class="container">
        <div class="row">
            <div class="col border">
                <a href="{{ route('admin.account.index') }}"><p>Пользователи: {{ $data['countUsers'] }}</p></a>
                @forelse ( $data['usersList'] as $user)
                <p>{{ $user->name }}</p>
                @empty
                <p>No user accounts yet</p>
                @endforelse
            </div>
            <div class="col border">
                <a href="{{ route('admin.post.index') }}"><p>Посты: {{ $data['countPosts'] }}</p></a>
                @forelse ( $data['postsList'] as $post)
                <p>{{ $post->title }}</p>
                @empty
                <p>No posts yet</p>
                @endforelse 
            </div>
        </div>
        <div class="row">
            <div class="col border">
                <a href="{{ route('admin.category.index') }}"><p>Категории: {{ $data['countCategories'] }}</p></a>
                @forelse ( $data['categoriesList'] as $category)
                <p>{{ $category->title }}</p>
                @empty
                <p>No categories yet</p>
                @endforelse                
            </div>
            <div class="col border"><a href="{{ route('admin.tag.index') }}"><p>Тэги: {{ $data['countTags'] }}</p></a>
                @forelse ( $data['tagsList'] as $tag)
                <p>{{ $tag->title }}</p>
                @empty
                <p>No tags yet</p>
                @endforelse 
            </div>
        </div>
    </section>
</main>
@endsection