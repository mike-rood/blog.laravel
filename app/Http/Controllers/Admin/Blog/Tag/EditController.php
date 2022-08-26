<?php

namespace App\Http\Controllers\Admin\Blog\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Tag $tag) {
        return view('admin.tag.edit', ['tag' => $tag, 'title' => "Tag {$tag->title}"]);
    }
}
