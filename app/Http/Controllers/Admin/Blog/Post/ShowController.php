<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post) {
        return view('admin.post.show', ['post' => $post, 'title' => "Post {$post->title}"]);
    }
}
