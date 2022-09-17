<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke() {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(3);
        $likedPosts = Post::orderByDesc('likes_count')->get()->take(3);
        $topCommented = Post::withCount('comments')->orderBy('comments_count', 'DESC')->get()->take(3);
        $categories = Category::get();
        $tags = Tag::get();
        return view('blog.index', compact('posts', 'likedPosts', 'topCommented', 'randomPosts', 'categories', 'tags'));
    }
}
