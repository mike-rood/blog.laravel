<?php

namespace App\Http\Controllers\Admin\Blog\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag) {
        $data = $request->validated();
        $tag->update($data);
        return view('admin.tag.show', ['tag' => $tag, 'title' => "Tag {$tag->title}"]);
    }
}
