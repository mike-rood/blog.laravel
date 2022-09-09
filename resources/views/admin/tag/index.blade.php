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
            @forelse($tags as $tag)
            <tr>
                <td class="w-5">{{ $tag->id }}</td>
                <td class="w-full">{{ $tag->title }}</td>
                <td class="w-5"><a href="{{ route('admin.tag.show', $tag->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                <td class="w-5"><a href="{{ route('admin.tag.edit', $tag->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td class="w-5">
                    <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-white">
                            <i class="fa-solid fa-eraser text-danger" role="button"></i>
                        </button>                        
                    </form>
                </td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($tag->created_at)) }}</td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($tag->updated_at)) }}</td>
            </tr>
            @empty
            <tr><td colspan="7">No tags yet</td></tr>            
            @endforelse
        </tbody>
    </table>
        <div>
            <a href="{{ route('admin.tag.create') }}">Форма добавления нового тэга</a>
        </div>
    </section>    
</main>
@endsection



