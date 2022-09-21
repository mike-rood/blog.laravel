<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke() 
    {
        $title = "User comments";
        $categories = Category::get();
        $tags = Tag::get();
        
        $comments = auth()->user()->comments;        
        
        return view('personal.comment.index', compact('title', 'categories', 'tags', 'comments'));
    }
}
