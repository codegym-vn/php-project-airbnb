<?php

namespace App\Http\Controllers;

use App\House;
use App\User;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {
        return House::get();
    }

    public function order(Request $request, $id)
    {
        $customer = new User();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;


    }



}
