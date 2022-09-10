<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $account) {
        $roles = User::getRoles();
        return view('admin.account.edit', ['user' => $account, 'roles' => $roles, 'title' => "User {$account->name}"]);
    }
}
