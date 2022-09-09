<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $users = User::all();
        return view('admin.account.index', ['title' => 'User accounts', 'users' => $users]);
    }
}
