<?php

namespace App\Http\Controllers\Blog\Post;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke() 
    {
        return redirect()->route('blog.index');
    }
}
