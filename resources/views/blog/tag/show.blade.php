@extends('layouts.template')

@section('main')

@include('layouts.includes.sidebar')

<main class='border content'>
    <h3>Посты с тэгом {{ $tag->title }}</h3>
    <section class="my-grid">
    @forelse ($posts as $post)
    <a href="{{ route('blog.post.show', $post->id) }}">
        <div class="border">
            <p>{{ $post->title }}</p>                       
            <img class="max-w-200" src="{{ asset('storage/' . $post->preview_image) }}" alt="preview"> 
            <p>{{ $post->category->title }}</p>
            <div class="d-flex flex-row justify-content-between">
                <p>Комментарии: {{ $post->comments->count() }}</p>
                <div class="d-flex flex-row justify-content-between align-items-baseline">
                    <p class="mr-1">{{ $post->likes_count }} </p>
                    @auth()
                        @if(auth()->user()->likes->contains($user->id))
                            <i class="fa-solid fa-heart"></i>
                            @else
                            <i class="fa-regular fa-heart"></i>
                        @endif
                    @endauth
                    @guest()
                    <i class="fa-regular fa-heart"></i>
                    @endguest()
                </div>
            </div>
        </div>
    </a>
    @empty
    <p>There is no posts</p>
    @endforelse
    </section>    
</main>

@endsection()