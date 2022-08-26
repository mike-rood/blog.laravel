<?php

namespace App\Http\Controllers\Admin\Blog\Tag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('admin.tag.create', ['title' => 'Tag create']);
    }
}
