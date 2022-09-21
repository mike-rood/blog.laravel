@extends('layouts.template')

@section('main')
@include('layouts.includes.sidebar')
<main class='border content'> 
    <div>
        <h2>{{ $title }}</h2>
        <p>User comments</p>
    </div>
    <section class="container">
        <table class="list">
        <thead>
        <th class="w-5">ID</th>
        <th class="w-full">Message</th>
        <th colspan="2" class="w-15">Actions</th>
        <th class="w-20">Created at</th>
        <th class="w-20">Updated at</th>
        </thead>
        <tbody>
            @forelse($comments as $comment)
            <tr>
                <td class="w-5">{{ $comment->id }}</td>
                <td class="w-full">{{ $comment->message }}</td>
                <td class="w-5"><a href="{{ route('personal.comment.edit', $comment->id) }}"><i class="fa-solid fa-eye"></i></a></td>                
                <td class="w-5">
                    <form action="{{ route('personal.comment.delete', $comment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fa-solid fa-eraser text-danger"></i>
                        </button>                        
                    </form>
                </td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($comment->created_at)) }}</td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($comment->updated_at)) }}</td>
            </tr>
            @empty
            <tr><td colspan="6">No posts yet</td></tr>
            @endforelse
        </tbody>
    </table>
    </section>
</main>
@endsection