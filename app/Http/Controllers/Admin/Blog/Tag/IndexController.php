<?php

namespace App\Http\Controllers\Admin\Blog\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke() {
        $tags = Tag::all();
        return view('admin.tag.index', ['title' => 'Tag', 'tags' => $tags ]);
    }
}
