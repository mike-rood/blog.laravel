@extends('layouts.template')

@section('main')

@include('layouts.includes.sidebar')

<main class='border content'>
    <section class="border">
        <p>{{ $post->title }}</p>
        <img class="w-75" src="{{ asset('storage/' . $post->main_image) }}" alt="preview">
        <p>{!! $post->content !!}</p>
        <div class="d-flex flex-row justify-content-between">            
            <p>Категория: {{ $post->category->title }}</p>
            <div class="d-flex flex-row justify-content-between align-items-baseline">
                <p class="mr-1">Понравилось: {{ $post->likes_count }} </p>
                @guest()
                <i class="fa-regular fa-heart"></i>
                @endguest()
                @auth()
                <form action="{{ route('post.like.update', $post->id) }}" method="POST">
                    @csrf                    
                    <button class="border-0 bg-transparent" type="submit">
                        @if(auth()->user()->likedPosts->contains($post->id))
                        <i class="fa-solid fa-heart"></i>
                        @else
                        <i class="fa-regular fa-heart"></i>
                        @endif
                    </button>                    
                </form>
                @endauth()               
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <p>Тэги:</p>
            <div class="d-flex flex-row justify-content-between">
                @forelse ($post->tags as $tag)
                <p><a href="{{ route('blog.tag.show', $tag->id) }}">{{ $tag->title }}</a></p>
                @empty
                <p>Post is not related to any tag</p>
                @endforelse
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <p>{{ $date->day }} {{ $date->translatedFormat('F') }} {{ $date->year }} {{ $date->format('H:i') }}</p>
            <p>Комментариев всего: {{ $post->comments->count() }}</p>
        </div>
    </section>
    @auth()
    <section class="border">
        <form action="{{ route('blog.comment.update', ['post' => $post->id, 'comment' => $comment->id]) }}" method="POST">
            @csrf
            @method('patch')
            <div>
                <label for="summernote">Редактирование комментария:</label>
            </div>
            <div>
                <textarea class="w-100" name="message" id="summernote"">{!! $comment->message !!}</textarea>
            </div>
            @error('message')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mt-10">
                <input type="submit" value="Отправить">
            </div>          
        </form>
    </section>
    @endauth()
    <section>
        @foreach ($post->comments->sortByDesc('created_at') as $comment)
            <div class="w-100 border">
                <div class="d-flex justify-content-between">    
                    <p>{{ $comment->user->name }} says:</p><p>{{ $comment->dateAsCarbon->diffForHumans() }}</p>
                </div>
                <p>{!! $comment->message !!}</p>
            </div>
        @endforeach
    </section>
</main>
@endsection