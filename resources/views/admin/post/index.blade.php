@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <section>
    <table class="list">
        <thead>
        <th class="w-5">ID</th>
        <th class="w-full">Title</th>
        <th colspan="3" class="w-15">Actions</th>
        <th class="w-20">Created at</th>
        <th class="w-20">Updated at</th>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td class="w-5">{{ $post->id }}</td>
                <td class="w-full">{{ $post->title }}</td>
                <td class="w-5"><a href="{{ route('admin.post.show', $post->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                <td class="w-5"><a href="{{ route('admin.post.edit', $post->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td class="w-5">
                    <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fa-solid fa-eraser text-danger"></i>
                        </button>                        
                    </form>
                </td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($post->created_at)) }}</td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($post->updated_at)) }}</td>
            </tr>
            @empty
            <tr><td colspan="7">No posts yet</td></tr>
            @endforelse
        </tbody>
    </table>
        <div>
            <a href="{{ route('admin.post.create') }}">Форма добавления нового поста</a>
        </div>
    </section>    
</main>
@endsection



