<?php

namespace App\Http\Controllers\Blog\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Category $category) 
    {
        $posts = Post::where('category_id', $category->id)->get();
        $categories = Category::get();
        $tags = Tag::get();
        return view('blog.category.show', compact('category', 'posts', 'categories', 'tags'));
    }
}
