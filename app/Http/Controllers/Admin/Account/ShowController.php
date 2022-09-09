<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ShowController extends Controller
{
    public function __invoke(User $account) {
        return view('admin.account.show', ['user' => $account, 'title' => "User {$account->name}"]);
    }
}
