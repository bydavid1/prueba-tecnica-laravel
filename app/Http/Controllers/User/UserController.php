<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function listUsers() {
        $users = User::all();
        // dd($users);

        return view('dashboard', ['users' => $users]);
    }
}
