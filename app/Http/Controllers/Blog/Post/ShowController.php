<?php

namespace App\Http\Controllers\Blog\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Post $post) 
    {
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category_id)
                ->where('id', '!=', $post->id)
                ->get()->take(3);
        $categories = Category::get();
        $tags = Tag::get();
        return view('blog.post.show', compact('post', 'date', 'relatedPosts', 'categories', 'tags'));
    }
}
