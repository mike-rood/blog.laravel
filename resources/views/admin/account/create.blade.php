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
        <div>
            <label for="email" class="w-20">Enter user email:  </label>
            <input type="text" name="email" value="{{ old('email') }}">
            @error('email')
            <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password" class="w-20">Enter password:  </label>
            <input type="text" name="password" value="{{ old('password') }}">
            @error('password')
            <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>     
        <div><input type="submit" value="Create"></div>        
    </form>    
</main>
@endsection