<?php

namespace App\Http\Controllers\Blog\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Tag $tag) 
    {
        $categories = Category::get();
        $tags = Tag::get();
        
        $posts = $tag->posts;
        return view('blog.tag.show', compact('categories', 'tags', 'posts', 'tag'));
    }
}
