<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        try {
            $data = $request->validated();
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            $data['preview_image'] = Storage::put('/public', $data['preview_image']);
            $data['main_image'] = Storage::put('/public', $data['main_image']);
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);            
        } catch (\Exception $exception){
            abort('404');
        }
        
        return redirect()->route('admin.post.index');
    }
}
