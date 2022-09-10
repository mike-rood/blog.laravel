<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke() {
        $roles = User::getRoles();
        return view('admin.account.create', ['title' => 'Create new account', 'roles' => $roles]);
    }
}
