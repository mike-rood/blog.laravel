@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <section>
    <table class="list">
        <thead>
        <th class="w-5">ID</th>
        <th class="w-full">Name</th>
        <th colspan="3" class="w-15">Actions</th>
        <th class="w-20">Created at</th>
        <th class="w-20">Updated at</th>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td class="w-5">{{ $user->id }}</td>
                <td class="w-full">{{ $user->name }}</td>
                <td class="w-5"><a href="{{ route('admin.account.show', $user->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                <td class="w-5"><a href="{{ route('admin.account.edit', $user->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td class="w-5">
                    <form action="{{ route('admin.account.delete', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fa-solid fa-eraser text-danger" role="button"></i>
                        </button>                        
                    </form>
                </td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($user->created_at)) }}</td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($user->updated_at)) }}</td>
            </tr>
            @empty
            <tr><td colspan="7">No users yet</td></tr>            
            @endforelse
        </tbody>
    </table>
        <div>
            <a href="{{ route('admin.account.create') }}">Форма добавления нового пользователя</a>
        </div>
    </section>    
</main>
@endsection



