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
        <div class="form-group display-flex">
            <label class="w-20">Роль пользователя</label>
            <div class="w-25">
                <select class="form-control" data-placeholder="Выберите роль" name="role">
                    @foreach ($roles as $id => $role)
                    <option value="{{ $id }}" {{ $id == $user->role ? 'selected' : '' }}>{{ $role }}</option>
                    @endforeach
                </select>
            </div>
            @error('role')
            <div class="text-danger">{{ $message }}</div>
            @enderror            
        </div>
        <div>
            <label for="email" class="w-20">Email пользователя: </label>
            <input type="text" name="email" value="{{ $user->email }}">
            @error('email')
            <span class="alert-danger">{{ $message }}</span>
            @enderror      
        </div>
        <div class="hidden">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
        </div>
        <div><input type="submit" value="Изменить"></div>    
    </form>
</main>
@endsection



