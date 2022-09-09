@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('admin.account.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <label for="name" class="w-20">Имя пользователя: </label>
            <input type="text" name="name" value="{{ $user->name }}">
            @error('name')
            <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email" class="w-20">Email пользователя: </label>
            <input type="text" name="email" value="{{ $user->email }}">
            @error('email')
            <span class="alert-danger">{{ $message }}</span>
            @enderror      
        </div>
        <div><input type="submit" value="Изменить"></div>    
    </form>
</main>
@endsection



