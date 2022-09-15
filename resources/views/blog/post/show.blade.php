@extends('layouts.template')

@section('main')
@include('personal.includes.sidebar')

<main class='border content'>
    <div class="border">
        <p>{{ $post->category->title }}</p>
        <img class="w-75" src="{{ asset('storage/' . $post->main_image) }}" alt="preview">
        <p>{{ $post->title }}</p>
        <p>{!! $post->content !!}</p>
        <p>{{ $date->day }} {{ $date->translatedFormat('F') }} {{ $date->year }} {{ $date->format('H:i') }}</p>
    </div>
    <section class="d-flex flex-row">
    @forelse ($relatedPosts as $post)
    <a href="{{ route('blog.post.show', $post->id) }}">
        <div class="border">
            <p>{{ $post->category->title }}</p>
            <div><img class="max-w-200" src="{{ asset('storage/' . $post->preview_image) }}" alt="preview"></div>
            <p>{{ $post->title }}</p>
        </div>
    </a>
    @empty
    <p>There is no posts</p>
    @endforelse
    </section>
</main>
@endsection

