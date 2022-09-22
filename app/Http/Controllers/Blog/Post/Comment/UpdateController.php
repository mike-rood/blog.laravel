<?php

namespace App\Http\Controllers\Blog\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\Post\Comment\UpdateRequest;
use App\Models\Post;
use App\Models\Comment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post, Comment $comment) 
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('blog.post.show', $post->id);
    }
}
