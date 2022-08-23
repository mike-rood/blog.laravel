<?php

namespace App\Http\Controllers\Admin\Blog\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke() {
        $categories = Category::all();
        return view('admin.index', ['page' => 'category.index', 'title' => 'Category', 'categories' => $categories ]);
    }
}
