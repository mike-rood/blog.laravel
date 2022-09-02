<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke() {
        $categories = Category::all();
        return view('admin.post.create', ['title' => 'Post create', 'categories' => $categories]);
    }
}
