<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke() {
        return view('admin.index', ['page' => 'blog.index', 'title' => 'Blog']);
    }
}
