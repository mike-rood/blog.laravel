<?php

namespace App\Http\Controllers\Admin\Blog\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {
        return view('admin.index', ['page' => 'categories']);
    }
}
