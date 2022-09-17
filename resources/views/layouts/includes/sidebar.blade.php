<aside class='border menu'>
    <h3>User menu</h3>
    @if ($categories->count() > 0)
    <h6>Категории:</h6>
    <ul>
        @foreach ($categories as $category)
        <li><a href=" {{ route('blog.category.show', $category->id) }}">{{ $category->title }}</a></li>
        @endforeach
    </ul>
    @endif
    @if ($tags->count() > 0)
    <h6>Тэги:</h6>
    <ul>
        @foreach ($tags as $tag)
        <li><a href=" {{ route('blog.tag.show', $tag->id) }}">{{ $tag->title }}</a></li>
        @endforeach
    </ul>
    @endif
    @auth()
    <ul>
        <li><a href="{{ route('personal.liked.index') }}">Понравившиеся посты</a></li>
        <li><a href="{{ route('personal.comment.index') }}">Комменты</a></li>
    </ul>  
    @endauth()
</aside>