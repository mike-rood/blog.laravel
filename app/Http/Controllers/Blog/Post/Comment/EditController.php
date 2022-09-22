<?php

namespace App\Http\Controllers\Blog\Post\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Carbon\Carbon;

class EditController extends Controller
{
    public function __invoke(Post $post, Comment $comment) 
    {
        $title = "Editing comment {$comment->id}";
        $date = Carbon::parse($post->created_at);
        $categories = Category::get();
        $tags = Tag::get();
        return view('blog.comment.edit', compact('title', 'categories', 'tags', 'post', 'date', 'comment'));
    }
}
