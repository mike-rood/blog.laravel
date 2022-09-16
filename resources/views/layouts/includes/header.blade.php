<header>
    <nav class="d-flex flex-row justify-content-between">
        <div><a href="{{ route('blog.index') }}">Blog</a></div>
        @auth()
        <div><a href="{{ route('personal.index') }}">Personal</a></div>
        <div><a href="{{ route('admin.index') }}">Admin</a></div>        
        <div>
            <form action="{{ route('logout')}}" method="POST">
                @csrf
                <input class="btn btn-outline-primary" type="submit" value="Выйти">
            </form>    
        </div>
        @endauth()
        @guest
        <div><a href="{{ route('home') }}" class="btn">Войти</a></div>
        @endguest()
    </nav>
</header>
