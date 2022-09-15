<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke() {
        $posts = Post::paginate(3);
        $randomPosts = Post::get()->random(2);
        $likedPosts = Post::withCount('likes')->orderBy('likes_count', 'DESC')->get()->take(2);
        return view('blog.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
