<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();
        $data['preview_image'] = Storage::put('/public', $data['preview_image']);
        $data['main_image'] = Storage::put('/public', $data['main_image']);
        Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }
}
