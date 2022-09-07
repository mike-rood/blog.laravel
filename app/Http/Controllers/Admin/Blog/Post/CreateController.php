<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Admin\Blog\Post\BaseController;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke() {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', ['title' => 'Post create', 'categories' => $categories, 'tags' => $tags]);
    }
}
