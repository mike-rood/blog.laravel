<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke() 
    {
        $title = "User";
        $categories = Category::get();
        $tags = Tag::get();
        return view('personal.main.index', compact('title', 'categories', 'tags'));
    }
}
