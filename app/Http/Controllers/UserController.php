<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index')->with([
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            // Agrega aquí más reglas de validación según tus necesidades
        ];

        $request->validate($rules);

        $user = User::create($request->all());

        return redirect()->route('admin.users.index')
            ->with('success', "Usuario registrado con éxito");
    }

    public function show(User $user)
    {
        return view('admin.users.show')->with([
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit')->with([
            'user' => $user
        ]);
    }
//     public function edit($id)
// {
//     $user = User::findOrFail($id); // Obtener el usuario por su ID
//     return view('admin.users.edit', compact('user'));
// }

    public function update(Request $request, User $user)
{
    $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        // Agrega aquí más reglas de validación según tus necesidades
    ];

    $request->validate($rules);

    $user->fill($request->all());
    $user->save();

    return redirect()->route('admin.users.index')
        ->with('success', "El usuario {$user->name} se editó con éxito.");
}

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', "El usuario {$user->username} se eliminó con éxito.");
    }
}