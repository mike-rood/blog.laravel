@extends('layouts.template')

@section('main')
@include('layouts.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('personal.comment.update', $comment->id) }}" method="POST">
    @csrf
    @method('PATCH')
        <div>
            <p><label for="summernote">Текст комментария: </label></p>
            <p><textarea name="message" id="summernote">{{ $comment->message }}</textarea></p>
            <p><input type="submit" value="Изменить"></p>
        @error('message')
            <p>Message can not be empty</p>
        @enderror
        </div>
    </form>
</main>
@endsection



