<?php

namespace App\Http\Controllers\Admin\Blog\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke(Category $category) {
        return view('admin.index', ['page' => 'category.show', 'category' => $category, 'title' => "Category {$category->title}"]);
    }
}
