@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <section>
    <table class="list">
        <thead>
        <th>ID</th>
        <th>Title</th>
        <th colspan="3">Actions</th>
        <th>Created at</th>
        <th>Updated at</th>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td><a href="{{ route('admin.post.show', $post->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                <td><a href="{{ route('admin.post.edit', $post->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <i class="fa-solid fa-eraser"></i>
                        </button>                        
                    </form>
                </td>
                <td>{{ date('j F Y G:i:s', strtotime($post->created_at)) }}</td>
                <td>{{ date('j F Y G:i:s', strtotime($post->updated_at)) }}</td>
            </tr>
            @empty
            <tr><td colspan=4>No posts yet</td></tr>
            @endforelse
        </tbody>
    </table>    
    </section>
    <section style="display: flex">
        <div><a href="{{ route('admin.post.create') }}">Форма добавления нового поста</a></div>
    </section>
</main>
@endsection



