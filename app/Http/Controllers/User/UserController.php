<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function listUsers() {
        $users = User::all();
        // dd($users);

        return view('dashboard', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }


    public function store(Request $request)
    {
        return redirect('/dashboard')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit(int $user_id) {
        Validator::make(['user_id' => $user_id], ['user_id' => 'required', 'exists:users,id'])->validate();

        $user = User::find($user_id);

        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->filled('password') ? bcrypt($request->input('password')) : $user->password,
        ]);

        return redirect('/dashboard')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect('/dashboard')->with('success', 'Usuario eliminado exitosamente.');
    }
}
