@extends('layouts.template')

@section('main')
@include('personal.includes.sidebar')

<main class='border content'>
    <section class="border">
        <p>{{ $post->category->title }}</p>
        <img class="w-75" src="{{ asset('storage/' . $post->main_image) }}" alt="preview">
        <p>{{ $post->title }}</p>
        <p>{!! $post->content !!}</p>
        <div class="d-flex flex-row justify-content-between">
            <p>{{ $date->day }} {{ $date->translatedFormat('F') }} {{ $date->year }} {{ $date->format('H:i') }}</p>
            <p>Комментариев всего: {{ $post->comments->count() }}</p>
        </div>
    </section>
    @auth()
    <section class="border">
        <form action="{{ route('blog.comment.store', $post->id) }}" method="POST">
            @csrf
            <div>
                <label for="summernote">Напишите комментарий:</label>
            </div>
            <div>
                <textarea class="w-100" name="message" id="summernote" value="{{ old('message') }}"></textarea>
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

