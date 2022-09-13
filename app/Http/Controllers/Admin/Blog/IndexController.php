<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $data = [];
        
        $data['countCategories'] = Category::all()->count();
        $data['categoriesList'] = Category::all();
        
        $data['countPosts'] = Post::all()->count();
        $data['postsList'] = Post::all();
        
        $data['countTags'] = Tag::all()->count();
        $data['tagsList'] = Tag::all();
        
        $data['countUsers'] = User::all()->count();
        $data['usersList'] = User::all();
        
        return view('admin.blog.index', ['title' => 'Admin Blog Index', 'data' => $data]);
    }
}
