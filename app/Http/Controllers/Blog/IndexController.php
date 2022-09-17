<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke() {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(3);
        $likedPosts = Post::orderByDesc('likes_count')->get()->take(3);
        //$likedPosts = Post::withCount('likes')->orderBy('likes_count', 'DESC')->get()->take(3);
        $topCommented = Post::withCount('comments')->orderBy('comments_count', 'DESC')->get()->take(3);
        return view('blog.index', compact('posts', 'likedPosts', 'topCommented','randomPosts'));
    }
}
