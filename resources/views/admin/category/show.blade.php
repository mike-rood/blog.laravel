<table class="single">
    <tr>
        <td>ID</td>
        <td>{{ $category->id }}</td>
    </tr>
    <tr>
        <td>Название</td>
        <td>{{ $category->title }} <a href="{{ route('admin.category.edit', $category->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
    </tr>
</table>