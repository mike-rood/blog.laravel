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
            @forelse($categories as $category)
            <tr>
                <td class="w-5">{{ $category->id }}</td>
                <td class="w-full">{{ $category->title }}</td>
                <td class="w-5"><a href="{{ route('admin.category.show', $category->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                <td class="w-5"><a href="{{ route('admin.category.edit', $category->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>                
                <td class="w-5">
                    <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fa-solid fa-eraser text-danger" role="button"></i>
                        </button>                        
                    </form>
                </td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($category->created_at)) }}</td>
                <td class="w-20">{{ date('d M Y G:i:s', strtotime($category->updated_at)) }}</td>
            </tr>
            @empty
            <tr><td colspan="7">No categories yet</td></tr>
            @endforelse
        </tbody>
    </table>    
    </section>
    <section style="display: flex">
        <div>
            <input type="button" onclick="toggleVisibility('CreateCategory', 'CreateCategoryButton')" value="Quick create new category" id="CreateCategoryButton">
            <form class="hideable hidden" action="{{ route('admin.category.store') }}" autocomplete="on" method="POST" id="CreateCategory">
                @csrf
                <p><input type="text" name="title" placeholder="Enter category title"></p>
                <p><input type="submit" value="Create"></p>        
            </form>
            @error('title')
            <p>Title can not be empty</p>
            @enderror
        </div>
        <div><a href="{{ route('admin.category.create') }}">Форма добавления новой категории</a></div>
    </section>
</main>
@endsection



