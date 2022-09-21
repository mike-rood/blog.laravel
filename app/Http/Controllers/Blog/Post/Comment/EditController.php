<?php

namespace App\Http\Controllers\Blog\Post\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Comment $comment) 
    {
        $title = "Editing comment {$comment->id}";
        $categories = Category::get();
        $tags = Tag::get();
        return view('personal.comment.edit', compact('title', 'categories', 'tags', 'comment'));
    }
}
