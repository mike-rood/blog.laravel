@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <table class="single">
        <tr>
            <td>ID</td>
            <td>{{ $user->id }}</td>
            <td colspan="2">Actions</td>
        </tr>
        <tr>
            <td>Имя</td>
            <td>{{ $user->name }}</td>
            <td><a href="{{ route('admin.account.edit', $user->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td>
                <form action="{{ route('admin.account.delete', $user->id) }}" method="POST">
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

