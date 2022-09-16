<?php

namespace App\Http\Controllers\Blog\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\Post\Comment\StoreRequest;
use App\Models\Post;
use App\Models\Comment;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post) 
    {
        $data = $request->validated();
        //$data['user_id'] = auth()->user()->id;
        $data['user_id'] = 12;
        $data['post_id'] = $post->id;
        Comment::create($data);
        return redirect()->route('blog.post.show', $post->id);
    }
}
