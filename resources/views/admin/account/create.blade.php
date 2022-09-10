@extends('layouts.template')

@section('main')
@include('admin.includes.sidebar')

<main class='border content'>
    <h2>{{ $title }}</h2>
    <form action="{{ route('admin.account.store') }}" autocomplete="on" method="POST">
        @csrf
        <div>
            <label for="name" class="w-20">Enter user name: </label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
            <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group display-flex">
            <label class="w-20">Роль пользователя</label>
            <div class="w-25">
                <select class="form-control" data-placeholder="Выберите роль" name="role">
                    @foreach ($roles as $id => $role)
                    <option value="{{ $id }}" {{ $id == old('id') ? 'selected' : '' }}>{{ $role }}</option>
                    @endforeach
                </select>
            </div>
            @error('role')
            <div class="text-danger">{{ $message }}</div>
            @enderror            
        </div>
        <div>
            <label for="email" class="w-20">Enter user email:  </label>
            <input type="text" name="email" value="{{ old('email') }}">
            @error('email')
            <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        <div><input type="submit" value="Create"></div>        
    </form>    
</main>
@endsection