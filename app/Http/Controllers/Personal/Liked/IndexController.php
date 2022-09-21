<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke() 
    {
        $title = "Liked posts";
        $categories = Category::get();
        $tags = Tag::get();
        $posts = auth()->user()->likedPosts;
        return view('personal.liked.index', compact('title', 'posts', 'categories', 'tags'));
    }
}
