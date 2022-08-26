<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $tag) {
        $data = $request->validated();
        $post->update($data);
        return view('admin.post.show', ['post' => $post, 'title' => "Post {$post->title}"]);
    }
}
