<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Account\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $account) {
        $data = $request->validated();
        $account->update($data);
        return view('admin.account.show', ['user' => $account, 'title' => "Account {$account->name}"]);
    }
}
