<?php

namespace App\Http\Controllers;
    use Illuminate\Http\Request;
use App\Models\User;

Class User_Controller extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $user = new User();

        $user->username = $request->username;
        $user->password = $request->password;

        $user->save();
        return response()->json(['message' => 'Berhasil menginputkan data', 'user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->username = $request->username;
        $user->password = $request->password;

        $user->save();
        return response()->json(['message' => 'data berhasil diupdate', 'user' => $user]);
    }

    public function delete ($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json('user berhasil didelete');
    }
}