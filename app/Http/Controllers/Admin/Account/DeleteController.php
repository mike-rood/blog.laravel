<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\User;

class DeleteController extends Controller
{
    public function __invoke(User $account) {
        $account->delete();
        return redirect()->route('admin.account.index');
    }
}
