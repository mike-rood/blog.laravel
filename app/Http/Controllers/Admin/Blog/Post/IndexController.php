<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Admin\Blog\Post\BaseController;
use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke() {
        $posts = Post::all();
        return view('admin.post.index', ['title' => 'Post', 'posts' => $posts ]);
    }
}
