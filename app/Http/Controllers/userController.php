<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return User::get();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function order(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phone = $request->input('phone');
        $user->role = $request->input('role');
        $user->save();
    }
}
