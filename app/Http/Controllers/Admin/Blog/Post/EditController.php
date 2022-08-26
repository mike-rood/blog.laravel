<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class EditController extends Controller
{
    public function __invoke(Post $tag) {
        return view('admin.post.edit', ['post' => $post, 'title' => "Post {$post->title}"]);
    }
}
