<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list() {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        // dd($users);

        return view('dashboard', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }


    public function store(RegisterRequest $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/dashboard')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit(int $user_id) {
        $user = User::findOrFail($user_id);

        return view('user.edit', ['user' => $user]);
    }

    public function update(UpdateRequest $request, $id)
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
