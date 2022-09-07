<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Admin\Blog\Post\BaseController;
use App\Http\Requests\Admin\Blog\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post) {
        $data = $request->validated();
        $post = $this->service->update($data, $post);    
        return view('admin.post.show', ['post' => $post, 'title' => "Post {$post->title}"]);
    }
}
