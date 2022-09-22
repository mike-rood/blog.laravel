<?php

namespace App\Http\Controllers\Blog\Post\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;

class DeleteController extends Controller
{
    public function __invoke(Post $post, Comment $comment) 
    {
        $comment->delete();
        return redirect()->route('blog.post.show', $post->id);
    }
}
