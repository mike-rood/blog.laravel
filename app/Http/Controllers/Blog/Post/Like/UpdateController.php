<?php

namespace App\Http\Controllers\Blog\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(Post $post) 
    {
        auth()->user()->likedPosts()->toggle($post->id);
        return redirect()->back();
    }
}
