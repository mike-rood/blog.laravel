<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() 
    {
        $likedPosts = auth()->user()->likedPosts;
        return view('personal.liked.index', ['title' => 'Likes', 'posts' => $likedPosts]);
    }
}