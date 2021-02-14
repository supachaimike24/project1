<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'user' => User::all(),
        ];
        return view('User.index', $data);
    }

    public function create()
    {
        return view('User.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User();
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make("1234");
        $user->save();
        return redirect('/user');
    }

    public function edit($id)
    {
        $User = User::find($id);
        $data = ['User' => $User];
        return view('user.edit', $data);
    }
    public function delete($id)
    {
        $User = User::find($id);
        $User->delete();
        return redirect('/user');
    }
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::find($id);
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make("1234");
        $user->save();
    }
}

    //
