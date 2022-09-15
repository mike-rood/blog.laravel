@extends('layouts.template')

@section('main')
<aside class='border menu'>
    <h3>User menu</h3>
</aside>
<main class='border content'>
    <h2>Blog</h2>
    <section class="my-grid">
    @forelse ($posts as $post)
    <div class="border">
        <p>{{ $post->category->title }}</p>
        <img class="max-w-200" src="{{ asset('storage/' . $post->preview_image) }}" alt="preview">
        <p>{{ $post->title }}</p>
        <p>{{ $post->content}}</p>
    </div>
    @empty
    <p>There is no posts</p>
    @endforelse    
    </section>
    <div>{{ $posts->links() }}</div>
    <section class="d-flex flex-row">
    @forelse ($randomPosts as $post)
    <div class="border">
        <p>{{ $post->category->title }}</p>
        <div><img class="max-w-200" src="{{ asset('storage/' . $post->preview_image) }}" alt="preview"></div>
        <p>{{ $post->title }}</p>
        <p>{{ $post->content}}</p>
    </div>
    @empty
    <p>There is no posts</p>
    @endforelse
    </section>
    <section class="d-flex flex-row">
    @forelse ($likedPosts as $post)
    <div class="border">
        <p>{{ $post->category->title }}</p>
        <div><img class="max-w-200" src="{{ asset('storage/' . $post->preview_image) }}" alt="preview"></div>
        <p>{{ $post->title }}</p>
        <p>{{ $post->content}}</p>
    </div>
    @empty
    <p>There is no posts</p>
    @endforelse
    </section>
</main>
@endsection