<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Admin\Blog\Post\BaseController;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post) {
        return view('admin.post.show', ['post' => $post, 'title' => "Post {$post->title}"]);
    }
}
