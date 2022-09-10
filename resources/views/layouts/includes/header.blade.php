<header>
    <div class="display-flex justify-content-between">
        <h3>Header</h3>
        <div>
            <form action="{{ route('logout')}}" method="POST">
                @csrf
                <input class="btn btn-outline-primary" type="submit" value="Выйти">
            </form>    
        </div>
    </div>
</header>
