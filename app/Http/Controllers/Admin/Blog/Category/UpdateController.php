<?php

namespace App\Http\Controllers\Admin\Blog\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category) {
        $data = $request->validated();
        $category->update($data);
        return view('admin.index', ['page' => 'category.show', 'category' => $category, 'title' => "Category {$category->title}"]);
        //return redirect()->route('admin.category.index');
    }
}
