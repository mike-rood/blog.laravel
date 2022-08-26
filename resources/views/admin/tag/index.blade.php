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
            @forelse($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->title }}</td>
                <td><a href="{{ route('admin.tag.show', $tag->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                <td><a href="{{ route('admin.tag.edit', $tag->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <i class="fa-solid fa-eraser"></i>
                        </button>                        
                    </form>
                </td>
                <td>{{ date('j F Y G:i:s', strtotime($tag->created_at)) }}</td>
                <td>{{ date('j F Y G:i:s', strtotime($tag->updated_at)) }}</td>
            </tr>
            @empty
            <tr><td colspan=4>No tags yet</td></tr>
            @endforelse
        </tbody>
    </table>    
    </section>
    <section style="display: flex">
        <div><a href="{{ route('admin.tag.create') }}">Форма добавления нового тэга</a></div>
    </section>
</main>
@endsection



