<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return Login::get();
    }

    public function show($id)
    {
        return Login::find($id);
    }

    public function login(Request $request)
    {
        $login = new Login();
        $login->email = $request->email;
        $login->password = $request->password;
        $login->save();

    }
}
