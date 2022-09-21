<?php

namespace App\Http\Controllers\Blog\Post\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment) 
    {
        dd($comment->id);
        $comment->delete();
        return redirect()->back();
    }
}
