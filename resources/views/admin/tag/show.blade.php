@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <table class="single">
        <tr>
            <td>ID</td>
            <td>{{ $tag->id }}</td>
            <td colspan="2">Actions</td>
        </tr>
        <tr>
            <td>Название</td>
            <td>{{ $tag->title }}</td>
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
        </tr>
    </table>
</main>
@endsection

