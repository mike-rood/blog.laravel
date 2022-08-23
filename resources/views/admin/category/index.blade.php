<section>
    <table class="list">
        <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created at</th>
        <th>Updated ad</th>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td><a href="{{ route('admin.category.show', $category->id) }}"><i class="fa-solid fa-eye"></i></a> <i class="fa-solid fa-pen-to-square"></i> <i class="fa-solid fa-eraser"></i></td>
                <td>{{ date('j F Y G:i:s', strtotime($category->created_at)) }}</td>
                <td>{{ date('j F Y G:i:s', strtotime($category->created_at)) }}</td>
            </tr>
            @empty
            <tr><td colspan=4>No categories yet</td></tr>
            @endforelse
        </tbody>
    </table>
    
</section>
<div>
    <input type="button" onclick="toggleVisibility('CreateCategory', 'CreateCategoryButton')" value="Add new category" id="CreateCategoryButton">
    <form class="hideable hidden" action="{{ route('admin.category.store') }}" autocomplete="on" method="POST" id="CreateCategory">
        @csrf
        <p><input type="text" name="title" placeholder="Enter category title"></p>
        <p><input type="submit" value="Create"></p>        
    </form>
    @error('title')
    <p>Title can not be empty</p>
    @enderror
</div>

